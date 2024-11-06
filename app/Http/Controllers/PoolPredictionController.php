<?php

namespace App\Http\Controllers;

use App\Models\DailyPercentage;
use App\Models\OrderPackage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PoolPredictionController extends Controller
{


    public function summarizeLevels()
    {

        $level = [
            1 => 0.4,
            2 => 0.3,
            3 => 0.2,
            4 => 0.05,
            5 => 0.03,
            6 => 0.02,
        ];

        $sp = Auth::user()->id;
        $i = 1;
        $total_summarized = 0;

        while ($i < 7) {
            if ($i == 1) {
                $sponsor_get = $sp;
            } else {
                $sponsor_get = $final_level[$i - 1]['next_sponsor'];
            }

            $final_level = $this->get_level($i, $sponsor_get, $level[$i]);
            $array_level[$i]['level'] = $i;
            $array_level[$i]['qty'] = $final_level[$i]['qty'];
            $array_level[$i]['value'] = $final_level[$i]['value'];
            $total_summarized += $final_level[$i]['value'];
            $i++;
        }


        return view('report.poolPrediction', compact('array_level', 'total_summarized'));
    }

    public function get_level($level_at, $sponsors, $multiplier)
    {
        $qty = 0;
        $n2_txt = "";
        $total_level = 0;

        $users = User::whereIn('recommendation_user_id', explode(',', $sponsors))->get();

        foreach ($users as $nivel1) {
            $qty++;
            $orders = OrderPackage::where('user_id', $nivel1->id)->where('status', 1)->sum('price');

            $percentage =  DailyPercentage::where('user_id', $nivel1->id)->orderBy('id', 'DESC')->first();
            $perc = $percentage->value_perc ?? 0;
            $anual = $orders * ($perc / 100) * 12;
            $pool_total = $anual * 0.12;

            if ($nivel1->id != "") {
                $n2_txt .= $nivel1->id . ",";
            }

            $get_pool = $pool_total * $multiplier;

            $total_level += $get_pool;
        }

        $sponsors = rtrim($n2_txt, ",");
        $final_level[$level_at]['value'] = $total_level;
        $final_level[$level_at]['next_sponsor'] = $sponsors;
        $final_level[$level_at]['qty'] = $qty;

        return $final_level;
    }
}
