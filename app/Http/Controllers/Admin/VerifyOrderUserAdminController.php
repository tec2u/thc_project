<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banco;
use App\Models\DailyPercentage;
use App\Export\ExportBonus;
use App\Models\OrderPackage;
use App\Models\SaveDateBonusDaily;
use App\Models\User;
use App\Traits\CustomLogTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifyOrderUserAdminController extends Controller
{
    use CustomLogTrait;
    public function index()
    {
        $value_perc = DailyPercentage::where('status', 1)->first();
        $query = DB::table('banco')
            ->rightJoin('orders_package', 'orders_package.id', '=', 'banco.order_id')
            ->whereNull('banco.id')
            ->where('payment_status', 1);

        $count_pay = $query
            ->select('orders_package.*')
            ->count();

        $total_pay = $query
            ->select('orders_package.price')
            ->get();
        $count_pay_orders = 0;
        foreach ($total_pay as $prices) {
            $count_pay_orders += $prices->price * ($value_perc->value_perc / 100);
        }
        $dates_save = $query->select('banco.date_save')
            ->distinct()->get();

        $bancos = Banco::orderBy('id', 'desc')->where('id', 0)->paginate(30);
        return view('admin.reports.signupbon', compact('bancos', 'count_pay', 'count_pay_orders', 'dates_save'));
    }

    public function setBonus($id_order, $id_user, $total_order, $description, $value_perc)
    {
        // $value_perc = DailyPercentage::where('status', 1)->first();
        $price = $total_order * ($value_perc / 100);

        return Banco::create([
            'user_id' => $id_user,
            'order_id' => $id_order,
            'percent_pay' => $value_perc,
            'description' => $description,
            'price' => $price,
            'date_save' => date('Y-m-d'),
            'created_at' => date("d-m-Y H:i")
        ]);
    }

    public function verifyUserOder(Request $request)
    {


        try {
            $users = User::where('rule', 'RULE_USER')->get();
            foreach ($users  as $users) {
                $date = Banco::where('user_id', $users->id)
                    ->orderBy('id', 'desc')
                    ->first();
                // if (is_null($date)) {
                if ($request->has('date')) {
                    $orders = OrderPackage::where('payment_status', 1)
                        ->where('user_id', $users->id)
                        ->where("date_save", $request->date)
                        ->get();
                } else {
                    $orders = OrderPackage::where('payment_status', 1)
                        ->where('user_id', $users->id)
                        ->get();
                }

                foreach ($orders as $order) {
                    if (is_null(Banco::verifyBonusDaily($order->id))) {
                        if ($order->price >= 2) {
                            if ($users->special_comission and  $users->special_comission_active == 1) {
                                $porc =    $users->special_comission;
                            } else {
                                $porc =    $request->value_perc;
                            }

                            $this->setBonus($order->id, $users->id, $order->price, 6, $porc);
                        }
                    }
                }
            }

            SaveDateBonusDaily::create([
                'amount_paid' => $request->amount_paid,
                'date_paid' => date('Y-m-d')
            ]);
            $this->createLog('Daily Bonus updated successfully', 200, 'success', auth()->user()->id);

            return redirect()->route('admin.order-bonus.index')->with('success', 'Bonus Daily Created');
        } catch (\Exception $e) {

            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.confignotremove'))->error();
            return redirect()->back();
        }
    }

    public function list(Request $request)
    {
        if ($request->has('value_perc')) {
            $value_perc = $request->value_perc;
        } else {
            $value_perc = DailyPercentage::where('status', 1)->first()->value_perc;
        }

        $query = Banco::rightJoin('orders_package', 'orders_package.id', '=', 'banco.order_id')
            ->join('users', 'users.id', '=', 'orders_package.user_id')
            ->whereNull('banco.id')
            ->where('payment_status', 1);

        if ($request->has('date_save')) {
            $total_pay = $query
                ->select('orders_package.price', 'banco.date_save')
                ->where('banco.date_save', $request->date_save)
                ->get();

            $count_pay = $query
                ->select('orders_package.*')
                ->where('banco.date_save', $request->date_save)
                ->count();
            $bancos = $query
                ->select('users.name as name_user', 'orders_package.id as order_id', 'orders_package.*')
                ->where('banco.date_save', $request->date_save)
                ->simplePaginate(20);
        } else {

            $total_pay = $query
                ->select('orders_package.price', 'orders_package.id')
                ->get();

            $count_pay = $query
                ->select('orders_package.*')
                ->count();

            $bancos = $query
                ->select('users.name as name_user', 'orders_package.id as order_id', 'orders_package.*')
                ->simplePaginate(20);
        }


        $count_pay_orders = 0;

        $banco = new Banco();

        foreach ($total_pay as $prices) {
            $data_user = $banco->getUserEspecialCommission($prices->id);

            if ($data_user->special_comission and $data_user->special_comission_active == 1) {
                $count_pay_orders += $prices->price * ($data_user->special_comission / 100);
            } else {
                $count_pay_orders += $prices->price * ($value_perc / 100);
            }
        }

        $dates_save = $query->select('banco.date_save')
            ->distinct()->get();

        return view('admin.reports.signupbon', compact('bancos', 'count_pay', 'count_pay_orders', 'value_perc', 'dates_save'));
    }

    public function listBonusDaily()
    {
        $bancos = Banco::whereIn('description', ['15', '16', '18'])->orderBy('id', 'desc')->paginate(9);
        return view('admin.reports.listDatePayDaily', compact('bancos'));
    }

    public function listBonusDailyAll($data)
    {
        $bancos = Banco::where('date_save', $data)->simplePaginate(20);
        return view('admin.reports.listBonusDay', compact('bancos', 'data'));
    }

    public function export()
    {
        ExportBonus::saveExcel();
        session()->flash('success', '');

        // return back();
    }
}
