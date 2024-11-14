<?php

namespace App\Http\Controllers;

use App\Models\OrderPackage;
use App\Models\Package;
use App\Models\User;
use App\Models\Wallet;
use App\Traits\CustomLogTrait;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\ClubSwanController;

class PaymentController extends Controller
{
    use CustomLogTrait;
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($package, $value)
    {
        $package = Package::find($package);
        if ($value >= $package->price) {
            $price = $value;
        } else {
            flash(__('The amount invested must be greater than or equal to' . $package->price))->error();
            return redirect()->back();
        }
        $name = substr(str_replace(' ', '', $package->name), 0, 15);
        try {
            $paymentConfig = [
                "api_url" => "https://coinremitter.com/api/v3/USDTTRC20/get-fiat-to-crypto-rate",
                "api_key" => '$2y$10$KW3Ztn7BkukH7aLL6BNLF.UOVGJrEtjFSl4H39uaRTNgthCl/ZgZK',
                "password" => "TYxYo39kmL",
                "currency" => "USD"
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
                    "fiat_amount": "' . $price . '",
                    "fiat_symbol": "' . $paymentConfig['currency'] . '"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $raw = json_decode(curl_exec($curl));
            curl_close($curl);
            $codepayment = "USDTTRC";
            $invoiceid = "USDTTRC";
            $wallet_OP = "";
            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0', $price);
            $coin = $raw->data->crypto_symbol;
            $paymentInfo = [
                "coin" => $raw->data->crypto_symbol,
                "value" => strval($raw->data->crypto_amount),
                "USD" => strval($raw->data->fiat_amount),
                "address" => ""
            ];
            return view('payment', compact('paymentInfo'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }
    public function indexUSDTERC($package, $value)
    {
        $package = Package::find($package);
        if ($value >= $package->price) {
            $price = $value;
        } else {
            flash(__('The amount invested must be greater than or equal to: ' . $package->price))->error();
            return redirect()->back();
        }

        $name = substr(str_replace(' ', '', $package->name), 0, 15);
        try {
            $paymentConfig = [
                "api_url" => "https://coinremitter.com/api/v3/USDTERC20/get-fiat-to-crypto-rate",
                "api_key" => '$2y$10$2rBBbuwX0z6zuqk26bhxS.9.j/zQ32Jp9powhH7mkuFEA9RqZ3iIK',
                "password" => "TYxYo39kmL",
                "currency" => "USD"
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
                    "fiat_amount": "' . $price . '",
                    "fiat_symbol": "' . $paymentConfig['currency'] . '"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $raw = json_decode(curl_exec($curl));
            curl_close($curl);
            $codepayment = "USDTERC";
            $invoiceid = "USDTERC";
            $wallet_OP = "0x3056418e71ccABB19Fe9DBB228248Ce010Fff6E8";
            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0', $price);
            $coin = $raw->data->crypto_symbol;
            $paymentInfo = [
                "coin" => $raw->data->crypto_symbol,
                "value" => strval($raw->data->crypto_amount),
                "USD" => strval($raw->data->fiat_amount),
                "address" => "0x3056418e71ccABB19Fe9DBB228248Ce010Fff6E8"
            ];
            return view('payment', compact('paymentInfo'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }

    public function paymentSimulator($package, $value)
    {
        $package = Package::find($package);
        if ($value >= $package->price) {
            $price = $value;
        } else {
            flash(__('The amount invested must be greater than or equal to: ' . $package->price))->error();
            return redirect()->back();
        }

        // try {
            $codepayment = "USDTERC";
            $invoiceid = "USDTERC";
            $wallet_OP = "0x3056418e71ccABB19Fe9DBB228248Ce010Fff6E8";
            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0', $price);
            return redirect()->route('packages.packagelog');
        // } catch (Exception $e) {
        //     $this->errorCatch($e->getMessage(), auth()->user()->id);
        //     flash(__('backoffice_alert.unable_to_process_your_order'))->error();
        //     return redirect()->route('packages.detail', ['id' => $package->id]);
        // }
    }

    public function indexBTC($package, $value)
    {
        $package = Package::find($package);
        if ($value >= $package->price) {
            $price = $value;
        } else {
            flash(__('The amount invested must be greater than or equal to: ' . $package->price))->error();
            return redirect()->back();
        }
        $packages = Package::orderBy('id', 'DESC')->where('activated', 1)->paginate(9);
        $name = substr(str_replace(' ', '', $package->name), 0, 15);
        try {
            $paymentConfig = [
                "api_url" => "https://coinremitter.com/api/v3/BTC/get-fiat-to-crypto-rate",
                "api_key" => '$2y$10$Yxo5QuZjcvBfgxMLTHosxugpUFX8bRHgc6HPHLDrfitEut670jbNS',
                "password" => "TYxYo39kmL",
                "currency" => "USD"
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
                    "fiat_amount": "' . $price . '",
                    "fiat_symbol": "' . $paymentConfig['currency'] . '"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $raw = json_decode(curl_exec($curl));
            curl_close($curl);
            $codepayment = "BTC";
            $invoiceid = "BTC";
            $wallet_OP = "32Mi3wfG8Cr8qfdeF54bV2YeTBsVsmqcqE";
            $this->createOrder($package, $codepayment, $invoiceid, $wallet_OP, '0', $price);
            $coin = $raw->data->crypto_symbol;
            $paymentInfo = [
                "coin" => $raw->data->crypto_symbol,
                "value" => strval($raw->data->crypto_amount),
                "USD" => strval($raw->data->fiat_amount),
                "address" => "32Mi3wfG8Cr8qfdeF54bV2YeTBsVsmqcqE"
            ];
            return view('payment', compact('paymentInfo', 'packages'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }
    public function subscriptionClub($package)
    {
        try {
            $package = Package::find($package);
            // dd($package);
            $price = $package->price;
            $name = substr(str_replace(' ', '', $package->name), 0, 15);
            $club = new ClubSwanController;
            $user = User::find(auth()->user()->id);
            // dd($user);
            if ($user->contact_id != NULL) {
                $data = array('planId' => $package->plan_id, 'contactId' => $user->contact_id);
                // dd($data);
                $clubResponse = $club->subscribe($data);
                if ($clubResponse->status == 'success') {
                    $subId = $clubResponse->data->id;
                } else {
                    throw new Exception("Subscription Failed: Confirm the planId registered in the package!");
                }
            }
            $this->createOrder($package, '0', '0', '0', $subId, $price);
            return redirect('https://sandbox.infinityclubcardmembers.com');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('backoffice_alert.unable_to_process_your_order'))->error();
            return redirect()->route('packages.detail', ['id' => $package->id]);
        }
    }
    public function createOrder($package, $payment, $invoiceid, $wallet, $subId, $price)
    {
        $user = User::find(auth()->user()->id);
        $user->orderPackage()->create([
            "reference"             => $package->name,
            "payment_status"        => 0,
            "transaction_code"      => $payment,
            "package_id"            => $package->id,
            "price"                 => $price,
            "amount"                => 1,
            "transaction_wallet"    => $invoiceid,
            "wallet"                => $wallet,
            "subscription_id"       => $subId
        ]);
    }
}
