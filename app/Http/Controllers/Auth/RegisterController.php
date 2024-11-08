<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MatrizForcadaController;
use App\Mail\UserRegisteredEmail;
use App\Models\HistoricScore;
use App\Models\Rede;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Traits\IpBlockTrait;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
   use IpBlockTrait;
   /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

   use RegistersUsers;

   /**
    * Where to redirect users after registration.
    *
    * @var string
    */
   protected $redirectTo = RouteServiceProvider::HOME;

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('guest');
   }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data)
   {
      // $data['birthday'] = str_replace("/", "-", $data['birthday']);

      if ((DB::table('users')->where('id', $data['recommendation_user_id'])->orWhere('login', $data['recommendation_user_id'])->exists())) {
         $user_rec = DB::table('users')->where('id', $data['recommendation_user_id'])->orWhere('login', $data['recommendation_user_id'])->first();
         $data['recommendation_user_id'] = $user_rec->id;
      } else {
         Alert::error('Referral User not found!');
         $data['recommendation_user_id'] = null;
      }

      $ip = $this->get_client_ip();
      $login = $data['login'];
      $password = $data['password'];

      // $verify = $this->verifyBlacklist($ip, $login, $password);
      // if ($verify != 'IP_BLOCK') {
      //    $data['verify'] = 'OK';
      // } else {
      //    Alert::error('You have made too many attempts. Try again in a few hours or contact support@infinityclubcards.com');
      //    $data['verify'] = NULL;
      // }

      // if(empty($data['id_card']) || $data['id_card'] == null){
      //    Alert::error('You must choose a card to proceed with the registration!');
      // }

      // $data['telephone'] = ($data['telephone']=='') ? 0 :  $data['telephone'];

      return Validator::make($data, [
         'name' => ['required', 'string', 'max:255'],
         'login' => ['required', 'alpha_num', 'lowercase', 'max:255', 'unique:users'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => ['required', 'regex:/^\S*$/u', 'string', 'min:8', 'confirmed'],
         'cell' => ['required', 'regex:/[0-9\+]/'],
         'country' => ['required', 'string', 'max:255'],
         'city' => ['required', 'string', 'max:255'],
         'last_name' => ['required', 'string', 'max:255'],
         'recommendation_user_id' => ['required', 'int'],
      ]);
   }

   /**
    * Create a new user instance after a valid registration.
    *x
    * @param  array  $data
    * @return \App\Models\User
    */
   protected function create(array $data)
   {
      $ip = $this->get_client_ip();
      $login = $data['login'];
      $password = $data['password'];

      $verify = $this->verifyBlacklist($ip, $login, $password);
      $user_rec = DB::table('users')->where('id', $data['recommendation_user_id'])->orWhere('login', $data['recommendation_user_id'])->first();

      $recommendation = $user_rec != null ? $user_rec->id : '3';

      $user =  User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'login' => $data['login'],
         'activated' => 0,
         'password' => Hash::make($data['password']),
         'financial_password' => Hash::make($data['password']),
         'recommendation_user_id' => $recommendation,
         'special_comission' => 1,
         'special_comission_active' => 0,
         'cell' => $data['cell'],
         'country'  => $data['country'],
         'city'  => $data['city'],
         'last_name' => $data['last_name'],
      ]);



      $sair = 1;
      $count = 1;
      $primeiro_id = $user->id;
      $fato_gerador = $user->id;
      // ini_set('max_execution_time', '300');
      while ($sair == 1) {
         $nivel_self = User::where('id', $fato_gerador)->first();
         if($nivel_self->recommendation_user_id == NULL)
            break;
         $soma_qty1 = User::where('id', $nivel_self->recommendation_user_id)->first();
         if ($soma_qty1 != NULL && $soma_qty1->recommendation_user_id >= 0) {
            if ($nivel_self->name != "") {
               $check_existe = HistoricScore::where('user_id_from', $primeiro_id)
               ->where('user_id', $soma_qty1->id)
               ->where('description', '6')->first();
               if ($check_existe == NULL) {
                  HistoricScore::create([
                     'score' => '1',
                     'user_id' => $soma_qty1->id,
                     'status' => '1',
                     'description' => '6',
                     'level_from' => $count,
                     'orders_package_id' => 0,
                     'user_id_from' => $primeiro_id
                  ]);
                  if($soma_qty1->qty == NULL){
                     User::where('id', $nivel_self->recommendation_user_id)->update(['qty' => 1]);
                  } else {
                     User::where('id', $nivel_self->recommendation_user_id)->increment('qty', 1);
                  }
               }
            }
            $nivel1 = User::where('id', $nivel_self->recommendation_user_id)->first();
            $nivel12 = User::where('recommendation_user_id', $nivel1->recommendation_user_id)->first();
            $count++;
            $fato_gerador = $nivel12->id;
         }
      }

        $matrizController = new MatrizForcadaController();
        $matrizController->matriz_forcada($user->id);
        return $user;
      // }
   }

   function get_client_ip()
   {
      $ipaddress = '';
      if (isset($_SERVER['HTTP_CLIENT_IP']))
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
      else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else if (isset($_SERVER['HTTP_X_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
      else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
      else if (isset($_SERVER['HTTP_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
      else if (isset($_SERVER['REMOTE_ADDR']))
         $ipaddress = $_SERVER['REMOTE_ADDR'];
      else
         $ipaddress = 'UNKNOWN';
      return $ipaddress;
   }
}
