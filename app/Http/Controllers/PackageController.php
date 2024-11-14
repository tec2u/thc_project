<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\OrderPackage;
use App\Models\User;
use App\Traits\CustomLogTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    use CustomLogTrait;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index($package = null, $value = null)
    // {
    //     $package = Package::find($package);

    //     $price = $package->price;


    //     $name = substr(str_replace(' ', '', $package->name), 0, 15);


    //     //$wallet = Wallet::where('user_id',auth()->user()->id)->first();

    //     // if(empty($wallet)){
    //     //     flash("Please register your wallet to complete the order")->warning();
    //     //     return redirect()->route('packages.detail', ['id' => $package->id]);
    //     // }

    //     try {

    //         $paymentConfig = [
    //             "api_url" => "https://coinremitter.com/api/v3/USDTTRC20/create-invoice",
    //             "api_key" => '$2y$10$KW3Ztn7BkukH7aLL6BNLF.UOVGJrEtjFSl4H39uaRTNgthCl/ZgZK',
    //             "password" => "TYxYo39kmL",
    //             "currency" => "USD",
    //             "expire_time" => "30"
    //         ];

    //         $curl = curl_init();

    //         curl_setopt_array($curl, array(
    //             CURLOPT_URL => $paymentConfig['api_url'],
    //             CURLOPT_RETURNTRANSFER => true,
    //             CURLOPT_ENCODING => '',
    //             CURLOPT_MAXREDIRS => 10,
    //             CURLOPT_TIMEOUT => 0,
    //             CURLOPT_FOLLOWLOCATION => true,
    //             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //             CURLOPT_CUSTOMREQUEST => 'POST',
    //             CURLOPT_POSTFIELDS => '{
    //                 "api_key": "' . $paymentConfig['api_key'] . '",
    //                 "password": "' . $paymentConfig['password'] . '",
    //                 "amount": "' . $price . '",
    //                 "name": "' . $name . '",
    //                 "currency": "' . $paymentConfig['currency'] . '",
    //                 "expire_time": "' . $paymentConfig['expire_time'] . '",
    //                 "notify_url" :"http://phpstack-884761-3067332.cloudwaysapps.com/notifyUrlPayment.php"
    //             }',
    //             CURLOPT_HTTPHEADER => array(
    //                 'Content-Type: application/json'
    //             ),
    //         ));

    //         $raw = json_decode(curl_exec($curl));

    //         curl_close($curl);

    //         $codepayment = $raw->data->id;
    //         $invoiceid = $raw->data->invoice_id;
    //         $wallet_OP = $raw->data->address;

    //         $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0');

    //         $coin = $raw->data->coin;

    //         $paymentInfo = [
    //             "coin" => $raw->data->coin,
    //             "value" => strval($raw->data->total_amount->$coin),
    //             "USD" => strval($raw->data->total_amount->USD),
    //             "address" => $raw->data->address
    //         ];

    //         return view('payment', compact('paymentInfo'));
    //     } catch (Exception $e) {
    //         $this->errorCatch($e->getMessage(), auth()->user()->id);
    //         flash(__('backoffice_alert.unable_to_process_your_order'))->error();
    //         return redirect()->route('packages.detail', ['id' => $package->id]);
    //     }
    // }


    public function index()
    {
        $user = User::find(Auth::id());
        $adesao = !$user->getAdessao($user->id);
        $packages = Package::orderBy('id', 'DESC')->where('activated', 1)->paginate(9);

        return view('package.produtos', compact('packages', 'adesao', 'user'));
    }


    public function indexUSDTERC($package, $value)
    {
        $package = Package::find($package);
        if($value >= $package->price){
            $price = $value;
        }else{
            flash(__('The amount invested must be greater than or equal to'.$package->price))->error();
            return redirect()->back();
        }

        $name = substr(str_replace(' ', '', $package->name), 0, 15);

        try {

            $paymentConfig = [
                "api_url" => "https://coinremitter.com/api/v3/USDTERC20/create-invoice",
                "api_key" => '$2y$10$2rBBbuwX0z6zuqk26bhxS.9.j/zQ32Jp9powhH7mkuFEA9RqZ3iIK',
                "password" => "TYxYo39kmL",
                "currency" => "USD",
                "expire_time" => "30"
            ];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $paymentConfig['api_url'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "api_key": "' . $paymentConfig['api_key'] . '",
                    "password": "' . $paymentConfig['password'] . '",
                    "amount": "' . $price . '",
                    "name": "' . $name . '",
                    "currency": "' . $paymentConfig['currency'] . '",
                    "expire_time": "' . $paymentConfig['expire_time'] . '",
                    "notify_url" :"http://phpstack-884761-3067332.cloudwaysapps.com/notifyUrlPayment.php"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $raw = json_decode(curl_exec($curl));

            curl_close($curl);

            $codepayment = $raw->data->id;
            $invoiceid = $raw->data->invoice_id;
            $wallet_OP = $raw->data->address;

            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0');

            $coin = $raw->data->coin;

            $paymentInfo = [
                "coin" => $raw->data->coin,
                "value" => strval($raw->data->total_amount->$coin),
                "USD" => strval($raw->data->total_amount->USD),
                "address" => $raw->data->address
            ];

            return view('payment', compact('paymentInfo'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }

    public function indexBTC($package, $value)
    {
        $package = Package::find($package);
        if($value >= $package->price){
            $price = $value;
        }else{
            flash(__('The amount invested must be greater than or equal to'.$package->price))->error();
            return redirect()->back();
        }


        $name = substr(str_replace(' ', '', $package->name), 0, 15);


        //$wallet = Wallet::where('user_id',auth()->user()->id)->first();

        // if(empty($wallet)){
        //     flash("Please register your wallet to complete the order")->warning();
        //     return redirect()->route('packages.detail', ['id' => $package->id]);
        // }


        try {

            $paymentConfig = [
                "api_url" => "https://coinremitter.com/api/v3/BTC/create-invoice",
                "api_key" => '$2y$10$Yxo5QuZjcvBfgxMLTHosxugpUFX8bRHgc6HPHLDrfitEut670jbNS',
                "password" => "TYxYo39kmL",
                "currency" => "USD",
                "expire_time" => "30"
            ];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $paymentConfig['api_url'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "api_key": "' . $paymentConfig['api_key'] . '",
                    "password": "' . $paymentConfig['password'] . '",
                    "amount": "' . $price . '",
                    "name": "' . $name . '",
                    "currency": "' . $paymentConfig['currency'] . '",
                    "expire_time": "' . $paymentConfig['expire_time'] . '",
                    "notify_url" :"http://phpstack-884761-3067332.cloudwaysapps.com/notifyUrlPayment.php"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $raw = json_decode(curl_exec($curl));

            curl_close($curl);

            $codepayment = $raw->data->id;
            $invoiceid = $raw->data->invoice_id;
            $wallet_OP = $raw->data->address;

            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0');

            $coin = $raw->data->coin;

            $paymentInfo = [
                "coin" => $raw->data->coin,
                "value" => strval($raw->data->total_amount->$coin),
                "USD" => strval($raw->data->total_amount->USD),
                "address" => $raw->data->address
            ];

            return view('payment', compact('paymentInfo'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }

    public function detail($packageid)
    {

        $package = Package::where('id', '=', $packageid)
            ->first();
        $packages = Package::orderBy('id', 'DESC')->where('activated', 1)->where('type', 'activator')->paginate(9);
        return view('package.produto', compact('package', 'packages'));
    }

    public function package()
    {
        $id_user  = Auth::id();
        $orderpackages = OrderPackage::orderBy('id', 'DESC')
            ->where('hide', false)
            ->where('user_id', $id_user)->paginate(9);

        return view('userpackageinfo', compact('orderpackages'));
    }

    public function hide($id)
    {
        try {
            $orderpackage = OrderPackage::find($id);
            $orderpackage->hide = true;
            $orderpackage->update();
            flash(__('package.your_order_has_been_hidden'))->success();
            return redirect()->back();
        } catch (Exception $e) {
            flash(__('package.unable_to_hide_your_order'))->error();
            return redirect()->back();
        }
    }
}
