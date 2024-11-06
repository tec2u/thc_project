<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use App\Models\Landing;
use Illuminate\Http\Request;

class LangingController extends Controller
{
    public function index($id, Request $request)
    {
        $indication = Landing::all()->first();
        $user = User::find($id);
        $landing = Campaign::find((int) $request->campaign);
        $login = $user->login;
        return view('welcome.landingpage', compact('login','indication','id','landing'));
    }

}
