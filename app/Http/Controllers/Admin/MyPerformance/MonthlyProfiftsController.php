<?php

namespace App\Http\Controllers\Admin\MyPerformance;

use App\Http\Controllers\Controller;
use App\Models\Banco;
use Illuminate\Http\Request;

class MonthlyProfiftsController extends Controller
{
    public function index(){
        $banco = new Banco();
        return view('myPerformance.monthlyProfits', compact('banco'));
    }
}
