<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\OrderPackage;
use App\Models\User;
use App\Traits\CustomLogTrait;
use App\Models\Wallet;
use App\Models\Documents;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use stdClass;

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

    #########################
    ########################

    public function packagepayNode($packageid)
    {


        // dd($data);

        // $controller = new CronPagamento;
        // $controller->index();

        $packages = Package::orderBy('id', 'DESC')->where('id', $packageid);

        $orderpackage = OrderPackage::find($packageid);

        // dd($orderpackage);

        // YZPVFNYyKjsoZKjR0kRCsQ==1kya9pQ2C4ykWAiM

        // $myWallets = Wallet::where('user_id', Auth::id())->get();
        // $wallet = null;

        // if (count($myWallets) > 0) {
        //     # code...
        //     $ids = [];
        //     foreach ($myWallets as $w) {
        //         array_push($ids, $w->id);
        //     }

        //     $idSorteado = $ids[array_rand($ids)];

        //     $wallet = Wallet::where('id', $idSorteado)->first();

        // }

        // if (isset($orderpackage->wallet)) {
        //     if (isset($wallett)) {
        //         $wallet = $wallett;
        //     }
        // }

        $wallet = null;
        $moedas = null;
        $value_btc = null;

        if (isset($orderpackage->wallet) && $orderpackage->wallet != "---") {

            $ewallet = Wallet::where('id', $orderpackage->wallet)->first();
            if (isset($ewallet)) {
                $wallet = $ewallet;
            } else {
                $wallet = new stdClass();
                $wallet->wallet = $orderpackage->wallet;
                $wallet->coin = $orderpackage->transaction_code;
                $wallet->address = $orderpackage->wallet;
            }

        } else {
            $wallet = null;
        }


        if (isset($orderpackage->price_crypto) && $orderpackage->payment_status != 2) {
            $value_btc = $orderpackage->price_crypto;

            $moedas = [
                "USDT_TRC20" => number_format($orderpackage->price / 1, 2),
            ];
        } else {

            $api_key = 'ca699a34-d3c2-4efc-81e9-6544578433f8';

            $response = Http::withHeaders([
                'X-CMC_PRO_API_KEY' => $api_key,
                'Content-Type' => 'application/json',
            ])->get('https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest?symbol=btc,eth,trx,trc20,USDT');

            $data = $response->json();

            // dd($data);

            // $bitcoin = $result->bitcoin->usd;
            $price_order = $orderpackage->price;
            // $value_btc = $price_order / $bitcoin;

            $btc = $data['data']['BTC'][0]['quote']['USD']['price'];
            $erc20 = 1;
            $trx = $data['data']['TRX'][0]['quote']['USD']['price'];
            $eth = $data['data']['ETH'][0]['quote']['USD']['price'];
            $trc20 = 1;

            $moedas = [
                // "BITCOIN" => number_format($price_order / $btc, 5),
                // "ETH" => number_format($price_order / $eth, 4),
                // "USDT_ERC20" => number_format($price_order / $erc20, 2),
                "TRX" => number_format($price_order / $trx, 2),
                "USDT_TRC20" => number_format($price_order / $trc20, 2),
            ];

        }

        $user = User::find(Auth::id());
        $adesao = !$user->getAdessao($user->id) >= 1;

        // dd($wallet);


        return view('package.packagepay', compact('moedas', 'packages', 'adesao', 'user', 'orderpackage', 'value_btc', 'wallet'));
    }

    public function genUrlCryptoNode($method, $order)
    {

        $paymentConfig = [
            // "api_url" => "http://127.0.0.1:8001/packages/wallets/notify"
            "api_url" => "https://crypto.binfinitybank.com/packages/wallets/notify"
        ];

        // dd($order);

        $curl = curl_init();

        // $url = "http://127.0.0.1:8000/packages/packagepay/notify";
        $url = "https://ai-nextlevel.com/packages/packagepay/notify";

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $paymentConfig['api_url'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                "id_order": "' . $order->id . '",
                "price": "' . $order->price . '",
                "price_crypto": "' . $order->price_crypto . '",
                "login": "' . "ai@tec2u.com.br" . '",
                "password": "' . "password" . '",
                "coin": "' . $method . '",
                "notify_url" : "' . $url . '"

            }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            )
        );

        $raw = json_decode(curl_exec($curl));

        curl_close($curl);
        if ($raw) {
            // dd($raw);
            return $raw;
        } else {
            return false;
        }
    }

    public function sendPostPayOrder($id_order)
    {

        $client = new Client();
        $Orderpackage = OrderPackage::where('id', $id_order)->first();

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json'
        ];

        $data = [
            "type" => "bonificacao",
            "param" => "GeraBonusPedidoInterno",
            "idpedido" => "$id_order",
            "prod" => 1
        ];

        $url = 'https://ai-nextlevel.com/public/compensacao/bonificacao.php';

        try {
            $resposta = $client->post($url, [
                'form_params' => $data,
                // 'headers' => $headers,

            ]);

            $statusCode = $resposta->getStatusCode();
            $body = $resposta->getBody()->getContents();

            parse_str($body, $responseData);

            $log = new CustomLog;
            $log->content = json_encode($responseData);
            $log->user_id = $Orderpackage->user_id;
            $log->operation = $data['type'] . "/" . $data['param'] . "/" . $data['idpedido'];
            $log->controller = "app/controller/admin/PackageAdminController";
            $log->http_code = 200;
            $log->route = "payd order";
            $log->status = "SUCCESS";
            $log->save();

        } catch (\Throwable $th) {
            return false;
        }



    }

    public function invoice($id)
    {
        if (!$id) {
            abort(404);
        }

        $order = OrderPackage::where('id', $id)->where('package_id', 20)->first();

        if (!$order) {
            abort(404);
        }

        if ($order->payment_status != 1) {
            abort(404);
        }

        // dd($order);

        $id_user = $order->user_id;
        $user = User::where('id', '=', $id_user)->first();
        // dd($user);

        $data = [
            'client_name' => $user->name . ' ' . $user->last_name ?? '',
            'client_email' => $user->email,
            'client_tel' => $user->cell ?? '',
            'package_name' => $order->reference,
            'package_price' => $order->price,
            'order_id' => $order->id
        ];

        return view('pdf.orderslipProduct', compact('data'));
    }

    public function processBuying()
    {
        return view('processBuying.form');
    }

    public function processBuyingCreate(Request $request)
    {
        // dd($request);
        $id_package = $request->package_id;

        $package = Package::where('id', $id_package)->first();

        $user = User::find(Auth::id());

        $path = public_path('images/printscreen/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        if (isset($request->image)) {
            if ($request->file('image')->isValid()) {
                $rules = [
                    'image' => 'file|mimes:jpeg,jpg,png,webp,doc,docx,pdf|max:10240',
                ];
                $validator = \Validator::make($request->all(), $rules);

                if (!$validator->fails()) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move($path, $imageName);
                } else {
                    return redirect()->back()->with('error', 'The image is invalid. Please try again.');
                }
            }

        }

        $newOrder = new OrderPackage;
        $newOrder->user_id = $user->id;
        $newOrder->reference = $package->name;
        $newOrder->payment_status = 0;
        $newOrder->transaction_code = 0;
        $newOrder->package_id = $package->id;
        $newOrder->price = $package->price;
        $newOrder->amount = 1;
        $newOrder->transaction_wallet = 0;
        $newOrder->wallet = 0;
        $adesao = !$user->getAdessao($user->id) >= 1;
        $newOrder->printscreen = $imageName ?? '';
        $newOrder->pass = $request->login_password;
        $newOrder->server = $request->server_address;
        $newOrder->user = $request->login_number;
        $newOrder->save();

        return redirect()->route('packages.packagelog')->with('success', '');
    }

    public function baixaPdf($nome)
    {
        $docs = Documents::all();

        foreach ($docs as $item) {
            $texto = $item->title;
            if (strpos($texto, '|') !== false) {
                $partes = explode('|', $texto);
                $palavraAntesDoPipe = $partes[0];
                if ($palavraAntesDoPipe == $nome) {
                    $file = storage_path("app/public/{$item->path}");
                    if (file_exists($file)) {
                        $headers = [
                            'Content-Type' => 'application/pdf',
                        ];
                        $fileName = "$nome.pdf";

                        return response()->download($file, $fileName, $headers);
                    } else {
                        abort(404);
                    }
                }
            }
        }

        abort(404);
    }

    function filterWallet($mt)
    {

    }

    public function payCryptoNode(Request $request)
    {
        $order = OrderPackage::where('id', $request->id)->first();

        // $walletGen = $this->filterWallet($request->method);

        if (isset($request->retry) && $request->retry == 1) {
            $rorder = OrderPackage::where('id', $request->id)->first();
            $rorder->payment_status = 0;
            $rorder->status = 0;
            $rorder->wallet = null;
            $rorder->payment = null;
            $order->price_crypto = null;
            $rorder->save();
        }

        // dd($request);

        if (strlen($request->price) < 7) {
            $price = floatval(str_replace(',', '.', $request->price));
        } else {
            $valorSemSeparadorMilhar = str_replace('.', '', $request->price);
            $price = str_replace(',', '.', $valorSemSeparadorMilhar);
        }

        $price = $request->price;

        $order->price_crypto = $request->{$request->method};
        $order->save();
        // dd($order);
        $postNode = $this->genUrlCryptoNode($request->method, $order);

        if (!$postNode) {
            // dd($postNode);
            $order = OrderPackage::where('id', $request->id)->first();
            $order->price_crypto = null;
            $order->wallet = null;
            $order->save();

            return redirect()->back();
        }

        // $eWallet = Wallet::where('address', $postNode->wallet)->first();

        // if (isset($eWallet)) {
        //     $order = OrderPackage::where('id', $request->id)->first();
        //     $order->wallet = $eWallet->id;
        //     $order->transaction_wallet = $postNode->merchant_id;
        //     $order->save();

        // } else {

        //     $wallet = new Wallet;
        //     $wallet->user_id = Auth::id();
        //     $wallet->wallet = $postNode->wallet;
        //     $wallet->description = 'wallet';
        //     $wallet->address = $postNode->wallet;
        //     $wallet->key = '';
        //     $wallet->mnemonic = '';
        //     $wallet->coin = $request->method;
        //     $wallet->save();

        $order = OrderPackage::where('id', $request->id)->first();
        $order->wallet = $postNode->wallet;
        $order->transaction_code = $request->method;
        $order->transaction_wallet = $postNode->merchant_id;
        $order->save();
        // }


        return redirect()->back();

    }

    public function payCrypto(Request $request)
    {
        // if (Auth::id() == 1 || Auth::id() == 115876) {
        if (true) {
            return $this->payCryptoNode($request);
        }


        if ($request->method != 'BTC' && $request->method != 'TRC20') {
            return redirect()->back();
        }

        /*   if (strlen($request->price) < 7) {
              $price = floatval(str_replace(',', '.', $request->price));
          } else {
              $valorSemSeparadorMilhar = str_replace('.', '', $request->price);
              $price = str_replace(',', '.', $valorSemSeparadorMilhar);
          } */

        $price = $request->price;

        $payment = $this->genUrlCrypto($price, $request->method);
        // dd($payment);
        if (isset($payment) and $payment != false) {
            $order = OrderPackage::where('id', $request->id)->first();
            $order->transaction_code = $payment->invoice_id;
            $order->payment_status = 0;
            $order->payment = "";
            $order->transaction_wallet = $payment->id;
            $order->save();
            return redirect()->away($payment->url);
        } else {
            return redirect()->back();
        }
    }
    public function packagepay($packageid)
    {
        // if (Auth::id() == 1 || Auth::id() == 115876) {
        if (true) {
            return $this->packagepayNode($packageid);
        }

        $user = User::find(Auth::id());
        $adesao = !$user->getAdessao($user->id) >= 1;
        $moedas = null;

        $packages = Package::orderBy('id', 'DESC')->where('id', $packageid);

        $orderpackage = OrderPackage::find($packageid);

        return view('package.packagepay', compact('packages', 'adesao', 'user', 'orderpackage', 'moedas'));
    }















}
