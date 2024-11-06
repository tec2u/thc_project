<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banco;
use App\Models\DailyPercentage;
use App\Models\OrderPackage;

class CompensationController extends Controller
{
    static function uplevelCompesation($id)
    {
        $user = User::find($id);
        $uplevelId =  User::find($user->recommendation_user_id);
        if ($uplevelId == null) {
            $uplevelId =  User::find(1);
        }

        $investment = OrderPackage::where('user_id', $id)->where('status', 1)->where('payment_status', 1)->orderBy('id', 'desc')->first();

        $data = [
            "user_id" => $uplevelId->id,
            "order_id" => $investment->id,
            "description" => 15,
            "price" => ($investment->price * 0.05),
            "status" => 1,
            "level_from" => 1
        ];
        Banco::create($data);
    }

    static function dailyCompensation($id)
    {
        $user = User::find($id);

        $investment = OrderPackage::where('user_id', $id)->where('status', 1)->where('payment_status', 1)->sum('price');

        $daily_percentage = DailyPercentage::where('user_id', $id)->where('status', 1)->whereBetween('date_save', [date('Y-m-01'), date('Y-m-t')])->orderBy('id', 'desc')->first();

        if ($daily_percentage == null) {
            $daily_percentage = DailyPercentage::where('user_id', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        }

        if ($daily_percentage == null) {
            $daily_percentage = json_decode(json_encode(array('value_perc' => 0.5)));
        }

        if ($investment > 0) {
            $data = [
                "user_id" => $user->id,
                "order_id" => 0,
                "description" => 16,
                "price" => ($investment * (($daily_percentage->value_perc / 30) / 100)),
                "status" => 1,
                "level_from" => 0
            ];
            Banco::create($data);
        }
    }

    static function anualCompensation($id)
    {
        $user = User::find($id);

        $network = User::where('recommendation_user_id', $user->id)->get();

        $investment = 0;

        foreach ($network as $userNet) {
            $investment += OrderPackage::where('user_id', $userNet->id)->where('status', 1)->where('payment_status', 1)->sum('price');
        }

        if ($investment > 0) {
            $data = [
                "user_id" => $user->id,
                "order_id" => 0,
                "description" => 17,
                "price" => ($investment * 0.012),
                "status" => 1,
                "level_from" => 0
            ];
            Banco::create($data);
        }
    }

    static function compensationAggregator($id)
    {
        $user = User::find($id);

        $investment = Banco::where('user_id', $user->id)->where('status', 1)->whereIn('description', ['15', '16', '17', '18'])->sum('price');

        $id_banco = array();
        $select_id = Banco::select('id')->where('user_id', $user->id)->where('status', 1)->whereIn('description', ['15', '16', '17', '18'])->get();

        foreach ($select_id as $id) {
            $id_banco[] = $id->id;
        }

        if ($investment > 0) {
            $data = [
                "user_id" => $user->id,
                "order_id" => 0,
                "description" => 18,
                "price" => ($investment),
                "status" => 1,
                "level_from" => 0
            ];
            Banco::create($data);
        }
        Banco::whereIn("id", $id_banco)->delete();
    }

    static function dailyCron()
    {
        $users = User::get();

        foreach ($users as $user) {
            if ($user->payFirstOrder()) {
                CompensationController::dailyCompensation($user->id);
            }
        }
    }

    static function anualCron()
    {
        $users = User::get();

        foreach ($users as $user) {
            if ($user->payFirstOrder()) {
                CompensationController::anualCompensation($user->id);
            }
        }
    }

    static function aggregatorCron()
    {
        $users = User::get();

        foreach ($users as $user) {
            if ($user->payFirstOrder()) {
                CompensationController::compensationAggregator($user->id);
            }
        }
    }
}
