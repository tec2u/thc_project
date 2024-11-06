<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ClubSwanController;
use App\Http\Controllers\CompensationController;
use App\Http\Requests\Admin\SearchRequest;
use App\Http\Controllers\Controller;
use App\Models\Banco;
use App\Models\ConfigBonus;
use App\Models\ConfigBonusunilevel;
use App\Models\DailyPercentage;
use App\Models\HistoricScore;
use App\Models\Order;
use App\Models\OrderPackage;
use App\Models\Package;
use App\Models\User;
use App\Traits\CustomLogTrait;
use App\Traits\OrderBonusTrait;
use App\Traits\PaymentLogTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class PackageAdminController extends Controller
{
    use CustomLogTrait, PaymentLogTrait, OrderBonusTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::orderBy('id', 'DESC')->paginate(9);

        return view('admin.packages.packages', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'price',
            'activated',
            'type',
            'long_description',
            'description_fees',
            'plan_id'
        ]);

        try {

            if ($request->hasFile('image')) {
                $images = $request->file('image')->store('admin/package', 'public');
                $data['img'] = $images;
            }
            $package = Package::create($data);

            $this->createLog('Package created successfully', 201, 'success', auth()->user()->id);
            flash(__('admin_alert.pkgcreate'))->success();
            return redirect()->route('admin.packages.index');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotcreate'))->error();
            return redirect()->back();
        }
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
        $package = Package::find($id);

        return view('admin.packages.edit', compact('package'));
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
        try {
            $data = $request->only([
                'name',
                'price',
                'commission',
                'activated',
                'type',
                'long_description',
                'description_fees',
                'plan_id'
            ]);

            $package = package::find($id);


            if ($request->hasFile('image')) {
                $images = $request->file('image')->store('admin/package', 'public');
                $data['img'] = $images;
            }

            $package->update($data);

            $this->createLog('Package updated successfully', 200, 'success', auth()->user()->id);
            flash(__('admin_alert.pkgupdate'))->success();
            return redirect()->route('admin.packages.index');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotupdate'))->error();
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderupdate(Request $request, $id)
    {
        try {

            $status = $request->get('status');
            $payment_status = $request->get('payment_status');
            $data = [
                "status"         => $status,
                "payment_status" => $payment_status
            ];


            $Orderpackage = OrderPackage::find($id);

            $Orderpackage->update($data);

            if ($Orderpackage->status == 1 && $Orderpackage->payment_status == 1) {
                ####POPULA A ARRAY COM O BONUS UNILEVEL PARA ENVIAR PRA FUNÇÃO

                $sumOrderPackage = OrderPackage::where('user_id', $Orderpackage->user_id)->sum('price');
                if ($sumOrderPackage >= 500 && $sumOrderPackage <= 9999) {
                    $perc = 2;
                } else if ($sumOrderPackage >= 10000 && $sumOrderPackage <= 100000) {
                    $perc = 5;
                } else if ($sumOrderPackage >= 100001 && $sumOrderPackage <= 500000) {
                    $perc = 7;
                } else if ($sumOrderPackage >= 500001 && $sumOrderPackage <= 1000000) {
                    $perc = 9;
                } else if ($sumOrderPackage >= 1000001) {
                    $perc = 11;
                }

                DailyPercentage::create([
                    'value_perc' => $perc,
                    'status' => 1,
                    'user_id' => $Orderpackage->user_id,
                    'date_save' => date("Y-m-d"),
                    'created_at' => date("Y-m-d H:i:s")
                ]);

                $array_unilevel = array();
                $array_unilevel_peoples = array();
                $pega_config_unilevel = ConfigBonusunilevel::get();

                foreach ($pega_config_unilevel as $pega_config_unilevel) {

                    if ($pega_config_unilevel->status == 1) {
                        $array_unilevel_peoples[$pega_config_unilevel->level] = $pega_config_unilevel->minimum_users;
                        $array_unilevel[$pega_config_unilevel->level] = $pega_config_unilevel->value_percent;
                    } else {
                        $array_unilevel_peoples[$pega_config_unilevel->level] = "";
                        $array_unilevel[$pega_config_unilevel->level] = "";
                    }
                }

                ####CHECA SE ACHA O USUARIO COM O PEDIDO NA TABELA BANCO
                $userrec = User::find($Orderpackage->user_id);

                if ($Orderpackage->package->type != 'activator') {
                    $userrec->update(['activated' => 1]);
                }

                if ($userrec->id !== null) {
                    CompensationController::uplevelCompesation($userrec->id);
                } else {
                    CompensationController::uplevelCompesation(1);
                }

                $check_ja_existe = 0;
                if ($userrec->recommendation_user_id >= 0 && !empty($userrec->recommendation_user_id)) {
                    $recommendation = User::find($userrec->recommendation_user_id);

                    if ($recommendation->getDirectsWithOrders($recommendation->id) % 10 == 0) {
                        if ($recommendation->getDirectsWithOrders($recommendation->id) == 10) {
                            $data = [
                                "score"             => 4,
                                "status"            => 1,
                                "description"       => "9",
                                "user_id"           => $recommendation->id,
                                "orders_package_id" => $Orderpackage->id,
                                "user_id_from"      => $userrec->id,
                                "level_from"        => "0",
                            ];

                            // $score = HistoricScore::create($data);
                        } else {
                            $data = [
                                "score"             => 2,
                                "status"            => 1,
                                "description"       => "9",
                                "user_id"           => $recommendation->id,
                                "orders_package_id" => $Orderpackage->id,
                                "user_id_from"      => $userrec->id,
                                "level_from"        => "0",
                            ];

                            // $score = HistoricScore::create($data);
                        }
                    }

                    $check_ja_existe = Banco::where('user_id', $userrec->recommendation_user_id)->where('order_id', $Orderpackage->id)->count();
                }



                $verifica_banco_steaking = Banco::where('user_id', $Orderpackage->user_id)->where('order_id', $Orderpackage->id)->get();

                if (count($verifica_banco_steaking) == 0) {

                    // $commission = $Orderpackage->package->commission;

                    // $data = [
                    //     "price"       => $commission,
                    //     "description" => "7",
                    //     "status"      => 1,
                    //     "user_id"     => $userrec->id,
                    //     "order_id"    => $Orderpackage->id,
                    //     "level_from"  => 0,
                    // ];

                    // $banco = Banco::create($data);
                    $valorespecial = isset($userrec->special_comission) && $userrec->special_comission_active ? $userrec->special_comission : 0;
                    $valorespecialcommition =  $Orderpackage->package->commission * ($valorespecial / 100);

                    if ($valorespecialcommition > 0) {
                        $data = [
                            "price"       => $valorespecialcommition,
                            "description" => "8",
                            "status"      => 1,
                            "user_id"     => $userrec->id,
                            "order_id"    => $Orderpackage->id,
                            "level_from"  => 0,
                        ];

                        $banco = Banco::create($data);
                    }
                }
                $config_bonus = ConfigBonus::where('id', '=', '1')->orWhere('id', '=', '2')->where('activated', 1)->get();

                if ($check_ja_existe == 0) {
                    if (count($config_bonus) > 0) {
                        $this->bonusDiretoIndireto_e_Volume($Orderpackage->user_id, $Orderpackage->package->commission, $Orderpackage->id, $array_unilevel, $array_unilevel_peoples);
                    }
                }
                $this->createPaymentLog('Payment processed successfully', 200, 'success',  $id, "Payment made by Admin");
            }

            $this->createLog('OrderPackage updated successfully', 200, 'success', auth()->user()->id);
            flash(__('admin_alert.pkgupdate'))->success();
            return redirect()->route('admin.packages.orderPackages');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.orderpkgnotupdate'))->error();
            return redirect()->route('admin.packages.orderPackages');
        }
    }

    public function payall()
    {
        $orders = OrderPackage::where('payment_status', '!=', 1)->get();
        try {
            foreach ($orders as $order) {
                $status = 1;
                $payment_status = 1;
                $data = [
                    "status"         => $status,
                    "payment_status" => $payment_status
                ];

                $id = $order->id;
                $Orderpackage = OrderPackage::find($id);

                $Orderpackage->update($data);

                if ($Orderpackage->status == 1 && $Orderpackage->payment_status == 1) {
                    ####POPULA A ARRAY COM O BONUS UNILEVEL PARA ENVIAR PRA FUNÇÃO

                    $sumOrderPackage = OrderPackage::where('user_id', $Orderpackage->user_id)->sum('price');
                    if ($sumOrderPackage >= 500 && $sumOrderPackage <= 9999) {
                        $perc = 2;
                    } else if ($sumOrderPackage >= 10000 && $sumOrderPackage <= 100000) {
                        $perc = 5;
                    } else if ($sumOrderPackage >= 100001 && $sumOrderPackage <= 500000) {
                        $perc = 7;
                    } else if ($sumOrderPackage >= 500001 && $sumOrderPackage <= 1000000) {
                        $perc = 9;
                    } else if ($sumOrderPackage >= 1000001) {
                        $perc = 11;
                    }

                    DailyPercentage::create([
                        'value_perc' => $perc,
                        'status' => 1,
                        'user_id' => $Orderpackage->user_id,
                        'date_save' => date("Y-m-d"),
                        'created_at' => date("Y-m-d H:i:s")
                    ]);

                    $array_unilevel = array();
                    $array_unilevel_peoples = array();
                    $pega_config_unilevel = ConfigBonusunilevel::get();

                    foreach ($pega_config_unilevel as $pega_config_unilevel) {

                        if ($pega_config_unilevel->status == 1) {
                            $array_unilevel_peoples[$pega_config_unilevel->level] = $pega_config_unilevel->minimum_users;
                            $array_unilevel[$pega_config_unilevel->level] = $pega_config_unilevel->value_percent;
                        } else {
                            $array_unilevel_peoples[$pega_config_unilevel->level] = "";
                            $array_unilevel[$pega_config_unilevel->level] = "";
                        }
                    }
                    ####CHECA SE ACHA O USUARIO COM O PEDIDO NA TABELA BANCO
                    $userrec = User::find($Orderpackage->user_id);

                    if ($Orderpackage->package->type != 'activator') {
                        $userrec->update(['activated' => 1]);
                    }

                    if ($userrec->id !== null) {
                        CompensationController::uplevelCompesation($userrec->id);
                    } else {
                        CompensationController::uplevelCompesation(1);
                    }

                    $check_ja_existe = 0;
                    if ($userrec->recommendation_user_id >= 0 && !empty($userrec->recommendation_user_id)) {
                        $recommendation = User::find($userrec->recommendation_user_id);

                        if ($recommendation->getDirectsWithOrders($recommendation->id) % 10 == 0) {
                            if ($recommendation->getDirectsWithOrders($recommendation->id) == 10) {
                                $data = [
                                    "score"             => 4,
                                    "status"            => 1,
                                    "description"       => "9",
                                    "user_id"           => $recommendation->id,
                                    "orders_package_id" => $Orderpackage->id,
                                    "user_id_from"      => $userrec->id,
                                    "level_from"        => "0",
                                ];

                                // $score = HistoricScore::create($data);
                            } else {
                                $data = [
                                    "score"             => 2,
                                    "status"            => 1,
                                    "description"       => "9",
                                    "user_id"           => $recommendation->id,
                                    "orders_package_id" => $Orderpackage->id,
                                    "user_id_from"      => $userrec->id,
                                    "level_from"        => "0",
                                ];

                                // $score = HistoricScore::create($data);
                            }
                        }
                        $check_ja_existe = Banco::where('user_id', $userrec->recommendation_user_id)->where('order_id', $Orderpackage->id)->count();
                    }

                    $verifica_banco_steaking = Banco::where('user_id', $Orderpackage->user_id)->where('order_id', $Orderpackage->id)->get();

                    if (count($verifica_banco_steaking) == 0) {

                        // $commission = $Orderpackage->package->commission;

                        // $data = [
                        //     "price"       => $commission,
                        //     "description" => "7",
                        //     "status"      => 1,
                        //     "user_id"     => $userrec->id,
                        //     "order_id"    => $Orderpackage->id,
                        //     "level_from"  => 0,
                        // ];

                        // $banco = Banco::create($data);
                        $valorespecial = isset($userrec->special_comission) && $userrec->special_comission_active ? $userrec->special_comission : 0;
                        $valorespecialcommition =  $Orderpackage->package->commission * ($valorespecial / 100);

                        if ($valorespecialcommition > 0) {
                            $data = [
                                "price"       => $valorespecialcommition,
                                "description" => "8",
                                "status"      => 1,
                                "user_id"     => $userrec->id,
                                "order_id"    => $Orderpackage->id,
                                "level_from"  => 0,
                            ];

                            $banco = Banco::create($data);
                        }
                    }
                    $config_bonus = ConfigBonus::where('id', '=', '1')->orWhere('id', '=', '2')->where('activated', 1)->get();

                    if ($check_ja_existe == 0) {
                        if (count($config_bonus) == 0) {
                            $this->bonusDiretoIndireto_e_Volume($Orderpackage->user_id, $Orderpackage->package->commission, $Orderpackage->id, $array_unilevel, $array_unilevel_peoples);
                        }
                    }
                    $this->createPaymentLog('Payment processed successfully', 200, 'success',  $id, "Payment made by Admin");
                }
            }

            $this->createLog('OrderPackage updated successfully', 200, 'success', auth()->user()->id);
            flash(__('admin_alert.pkgupdate'))->success();
            return redirect()->route('admin.packages.orderPackages');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.orderpkgnotupdate'))->error();
            return redirect()->route('admin.packages.orderPackages');
        }
    }

    static public function orderUpdateKYC()
    {
        try {
            echo 'INICIO';
            $orders = OrderPackage::where('status', 0)->where('payment_status', 0)->get();
            foreach ($orders as $order) {
                echo 'LOOP';
                $userClub = User::where('id', $order->user_id)->first();
                echo $userClub->contact_id;
                if ($userClub->contact_id != NULL && $userClub->contact_id != '') {
                    $response = ClubSwanController::kycStatic(array('contactId' => $userClub->contact_id));
                } else {
                    $json = '{
                        "status": "fail",
                        "data": {
                            "overallStatus": "PENDING"
                        }
                    }';
                    $response = json_decode($json);
                }
                if ($response->status == 'success' && $response->data->overallStatus == 'APPROVED') {
                    $status = 1;
                    $payment_status = 1;
                    $data = [
                        "status"         => $status,
                        "payment_status" => $payment_status
                    ];


                    $Orderpackage = OrderPackage::find($order->id);
                    $Orderpackage->update($data);

                    if ($Orderpackage->status == 1 && $Orderpackage->payment_status == 1) {
                        ####POPULA A ARRAY COM O BONUS UNILEVEL PARA ENVIAR PRA FUNÇÃO

                        $sumOrderPackage = OrderPackage::where('user_id', $Orderpackage->user_id)->sum('price');
                        if ($sumOrderPackage >= 500 && $sumOrderPackage <= 9999) {
                            $perc = 2;
                        } else if ($sumOrderPackage >= 10000 && $sumOrderPackage <= 100000) {
                            $perc = 5;
                        } else if ($sumOrderPackage >= 100001 && $sumOrderPackage <= 500000) {
                            $perc = 7;
                        } else if ($sumOrderPackage >= 500001 && $sumOrderPackage <= 1000000) {
                            $perc = 9;
                        } else if ($sumOrderPackage >= 1000001) {
                            $perc = 11;
                        }

                        DailyPercentage::create([
                            'value_perc' => $perc,
                            'status' => 1,
                            'user_id' => $Orderpackage->user_id,
                            'date_save' => date("Y-m-d"),
                            'created_at' => date("Y-m-d H:i:s")
                        ]);

                        $array_unilevel = array();
                        $array_unilevel_peoples = array();
                        $pega_config_unilevel = ConfigBonusunilevel::get();

                        foreach ($pega_config_unilevel as $pega_config_unilevel) {

                            if ($pega_config_unilevel->status == 1) {
                                $array_unilevel_peoples[$pega_config_unilevel->level] = $pega_config_unilevel->minimum_users;
                                $array_unilevel[$pega_config_unilevel->level] = $pega_config_unilevel->value_percent;
                            } else {
                                $array_unilevel_peoples[$pega_config_unilevel->level] = "";
                                $array_unilevel[$pega_config_unilevel->level] = "";
                            }
                        }

                        ####CHECA SE ACHA O USUARIO COM O PEDIDO NA TABELA BANCO
                        $userrec = User::find($Orderpackage->user_id);

                        if ($Orderpackage->package->type != 'activator') {
                            $userrec->update(['activated' => 1]);
                        }

                        if ($userrec->id !== null) {
                            CompensationController::uplevelCompesation($userrec->id);
                        } else {
                            CompensationController::uplevelCompesation(1);
                        }

                        $check_ja_existe = 0;
                        if ($userrec->recommendation_user_id >= 0 && !empty($userrec->recommendation_user_id)) {
                            $recommendation = User::find($userrec->recommendation_user_id);

                            if ($recommendation->getDirectsWithOrders($recommendation->id) % 10 == 0) {
                                if ($recommendation->getDirectsWithOrders($recommendation->id) == 10) {
                                    $data = [
                                        "score"             => 4,
                                        "status"            => 1,
                                        "description"       => "9",
                                        "user_id"           => $recommendation->id,
                                        "orders_package_id" => $Orderpackage->id,
                                        "user_id_from"      => $userrec->id,
                                        "level_from"        => "0",
                                    ];

                                    // $score = HistoricScore::create($data);
                                } else {
                                    $data = [
                                        "score"             => 2,
                                        "status"            => 1,
                                        "description"       => "9",
                                        "user_id"           => $recommendation->id,
                                        "orders_package_id" => $Orderpackage->id,
                                        "user_id_from"      => $userrec->id,
                                        "level_from"        => "0",
                                    ];

                                    // $score = HistoricScore::create($data);
                                }
                            }

                            $check_ja_existe = Banco::where('user_id', $userrec->recommendation_user_id)->where('order_id', $Orderpackage->id)->count();
                        }



                        $verifica_banco_steaking = Banco::where('user_id', $Orderpackage->user_id)->where('order_id', $Orderpackage->id)->get();

                        if (count($verifica_banco_steaking) == 0) {

                            // $commission = $Orderpackage->package->commission;

                            // $data = [
                            //     "price"       => $commission,
                            //     "description" => "7",
                            //     "status"      => 1,
                            //     "user_id"     => $userrec->id,
                            //     "order_id"    => $Orderpackage->id,
                            //     "level_from"  => 0,
                            // ];

                            // $banco = Banco::create($data);
                            $valorespecial = isset($userrec->special_comission) && $userrec->special_comission_active ? $userrec->special_comission : 0;
                            $valorespecialcommition =  $Orderpackage->package->commission * ($valorespecial / 100);

                            if ($valorespecialcommition > 0) {
                                $data = [
                                    "price"       => $valorespecialcommition,
                                    "description" => "8",
                                    "status"      => 1,
                                    "user_id"     => $userrec->id,
                                    "order_id"    => $Orderpackage->id,
                                    "level_from"  => 0,
                                ];

                                $banco = Banco::create($data);
                            }
                        }
                        $config_bonus = ConfigBonus::where('id', '=', '1')->orWhere('id', '=', '2')->where('activated', 1)->get();

                        if ($check_ja_existe == 0) {
                            if (count($config_bonus) > 0) {
                                PackageAdminController::bonusDiretoIndireto_e_VolumeStatic($Orderpackage->user_id, $Orderpackage->package->commission, $Orderpackage->id, $array_unilevel, $array_unilevel_peoples);
                            }
                        }
                        DB::table('payment_log')->insert(
                            [
                                'content'           => 'Payment processed successfully - KYC Approved',
                                'order_package_id'  => $order->id,
                                'operation'         => 'orderUpdateKYC',
                                'controller'        => 'PackageAdminController',
                                'http_code'         => 200,
                                'route'             => 'PackageAdminController.orderUpdateKYC',
                                'status'            => 'success',
                                'json'              => "Payment made by KYC Status Cron - " . json_encode($response)
                            ]
                        );
                    }
                    DB::table('custom_log')->insert(
                        [
                            'content'   => 'OrderPackage updated successfully - KYC Approved',
                            'user_id'   => '0',
                            'operation' => 'orderUpdateKYC',
                            'controller' => 'PackageAdminController',
                            'http_code' => 200,
                            'route'     => 'PackageAdminController.orderUpdateKYC',
                            'status'    => 'success',
                        ]
                    );
                }
            }
            return true;
        } catch (Exception $e) {
            echo "|||||   " . $e->getMessage();
            DB::table('custom_log')->insert(
                [
                    'content'   => $e->getMessage() . ' - KYC Error',
                    'user_id'   => '0',
                    'operation' => 'orderUpdateKYC',
                    'controller' => 'PackageAdminController',
                    'http_code' => 500,
                    'route'     => Route::currentRouteName(),
                    'status'    => 'error',
                ]
            );
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $package = Package::find($id);
            $package->activated = false;

            $package->update();
            $this->createLog('Package removed successfully', 204, 'success', auth()->user()->id);
            flash(__('admin_alert.pkgremove'))->success();
            return redirect()->route('admin.packages.index');
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotremove'))->error();
            return redirect()->back();
        }
    }

    public function packageFilter($parameter)
    {
        try {
            $packageSearch = Package::orderBy('id', 'DESC');

            //Filters
            switch ($parameter) {
                case 'activated':
                    $packageSearch->where('activated', true);
                    break;
                case 'desactivated':
                    $packageSearch->where('activated', false);
                    break;
            }

            $packages = $packageSearch->paginate(9);
            return view('admin.packages.packages', compact('packages'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotfound'))->error();
            return redirect()->back();
        }
    }

    public function search(SearchRequest $request)
    {
        try {
            $data = $request->search;
            $packages = Package::where('name', 'like', '%' . $data . '%')->paginate(9);
            flash(__('admin_alert.pkgfound'))->success();
            return view('admin.packages.packages', compact('packages'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotfound'))->error();
            return redirect()->back();
        }
    }

    public function orderPackages()
    {
        $orderpackages = OrderPackage::orderBy('id', 'DESC')->paginate(9);

        return view('admin.packages.orders', compact('orderpackages'));
    }

    public function searchOrders(SearchRequest $request)
    {

        try {

            $data = $request->search;
            if (is_numeric($data)) {
                $orderpackages = OrderPackage::where('id', 'like', '%' . $data . '%')->orderBy('id', 'DESC')->paginate(9);
            } else {
                $orderpackages = DB::table('orders_package')
                    ->selectRaw('*,orders_package.id as id')
                    ->join('users', 'orders_package.user_id', '=', 'users.id')
                    ->join('packages', 'orders_package.package_id', '=', 'packages.id')
                    ->where('users.name', 'like', '%' . $data . '%')
                    ->orWhere('users.login', 'like', '%' . $data . '%')
                    ->paginate(9);
            }

            flash(__('admin_alert.userfound'))->success();
            return view('admin.packages.orders', compact('orderpackages'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.usernotfound'))->error();
            return redirect()->back();
        }
    }

    public function getDateOrders(Request $request)
    {

        $fdate = $request->get('fdate') . " 00:00:00";
        $sdate = $request->get('sdate') . " 23:59:59";

        $orderpackages = OrderPackage::where('created_at', '>=', $fdate)->where('created_at', '<=', $sdate)->paginate(9);

        return view('admin.packages.orders', compact('orderpackages'));
    }

    public function orderfilter($parameter)
    {
        try {
            $packageSearch = OrderPackage::orderBy('id', 'DESC');

            //Filters
            switch ($parameter) {
                case 'paid':
                    $packageSearch->where('payment_status', 1);
                    break;
                case 'send':
                    $packageSearch->where('status', 0);
                    break;
                case 'canceled':
                    $packageSearch->where('status', 2);
                    break;
            }

            $orderpackages = $packageSearch->paginate(9);
            return view('admin.packages.orders', compact('orderpackages'));
        } catch (Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.pkgnotfound'))->error();
            return redirect()->route('admin.packages.orderPackages');
        }
    }
}
