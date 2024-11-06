<?php

namespace App\Http\Controllers\Admin\AffiliateNetwork;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateNetworkController extends Controller
{
    public function myAffiliateLinks()
    {
        return view('affiliate-network.MyAffiliateLinks');
    }

    public function theProgramm()
    {
        return view('affiliate-network.TheProgramm');
    }

    public function transactions()
    {
        $id_user  = Auth::id();

        $transactions = User::find($id_user)->banco()->where('description', '<>', 3)->orderBy('id', 'desc')->paginate(9);

        // dd($transactions);

        return view('report.transaction', compact('transactions'));
    }
}
