<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CareerUser;
use App\Models\User;
use App\Models\OrderPackage;
use App\Models\HistoricScore;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signupcommission()
    {
        $id_user  = Auth::id();
        $scores = User::find($id_user)->banco()->where('description', 1)->paginate(9);


        return view('report.signupcommission', compact('scores'));
    }

    public function bonusdaily($month, $year = null)
    {
        $year_code =  $year  ?? date("Y");
        // dd($year_code . "-" . $month . "-01");
        $bancos =  Banco::whereIn('description', ['15', '16', '17', '18'])
            // ->select(DB::raw('SUM(price) as total_sales'))
            ->where('created_at', '>=', $year_code . "-" . $month . "-01" . " 00:00:00")
            ->where('created_at', '<=', $year_code . "-" . $month . "-31" . " 23:59:59")
            ->where('user_id', '=', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->paginate(30);
        return view('report.signupbon', compact('bancos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rankReward()
    {

        $id_user  = Auth::id();
        $career_users = CareerUser::where('user_id', $id_user)->orderBy('id', 'desc')->paginate(9);



        return view('report.rankreward', compact('career_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function levelIncome()
    {
        $id_user  = Auth::id();
        $scores =  User::find($id_user)->banco()->where('description', 2)->paginate(9);


        return view('report.levelincome', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function stakingRewards()
    {
        $id_user  = Auth::id();
        $scores = HistoricScore::where('user_id', $id_user)->where('description', 7)->orderBy('id', 'desc')->paginate(9);


        return view('report.stackingreward', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function monthlyCoins()
    {
        $id_user  = Auth::id();
        $monthly_coins = User::find($id_user)->banco()->where('description', 3)->paginate(9);

        return view('report.monthlycoins', compact('monthly_coins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transactions()
    {
        $id_user  = Auth::id();
        $transactions = User::find($id_user)->banco()->where('description', '<>', 3)->paginate(9);

        return view('report.transaction', compact('transactions'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function poolcommission()
    {
        $id_user  = Auth::id();
        $scores =  User::find($id_user)->banco()->where('description', 5)->paginate(9);


        return view('report.poolcommission', compact('scores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ttttt
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
