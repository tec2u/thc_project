<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use App\Models\OrderPackage;
use Carbon\Carbon;

class DailyProfitBonusCronController extends Controller
{
    public function runCron()
    {


        $now = Carbon::today();
        $bonus_pendings = OrderPackage::where('daily_profit_bonus', '')->where(function ($query) use ($now) {
                        $query->whereDate('daily_profit_bonus', '<', $now)
                            ->orWhereNull('daily_profit_bonus');
                    })->where('payment_status', 1)->where('status', 1)->get();

        foreach ($bonus_pendings as $bonus) {

            Banco::create([
                'user_id' => $bonus->user_id,
                'order_id' => $bonus->user_id,
                'description' => 99,
                'price' => $bonus->price * 0.01,
                'status' => 0,
                'level_from' => 0
            ]);
            
            $bonus->daily_profit_bonus = $now;
            $bonus->save();
        }
    }
}
