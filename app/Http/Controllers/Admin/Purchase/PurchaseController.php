<?php

namespace App\Http\Controllers\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use App\Models\OrderPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function purchase(){
        return view('purchase.purchase');
    }

    public function cart(){
        return view('purchase.cart');
    }

    public function linkToRegister(){
        return view('purchase.LinkRegister');
    }

    public function eWallet(){
        $id_user  = Auth::id();
        $user = User::find(Auth::id());
        $adesao = !$user->getAdessao($user->id);
        $packages = Package::orderBy('id', 'DESC')->where('activated', 1)->paginate(9);
        $orderpackages = OrderPackage::orderBy('id', 'DESC')
            ->where('hide', false)
            ->where('user_id', $id_user)->paginate(9);

        return view('purchase.eWallet', compact('adesao', 'user','packages','orderpackages'));
    }


    public function fiatViaRevolut(){
        return view('purchase.fiatViaRevolut');
    }

    public function infinityClub(){
        return view('purchase.infinityClub');
    }


}
