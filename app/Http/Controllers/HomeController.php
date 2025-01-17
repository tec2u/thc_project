<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use App\Models\HistoricScore;
use App\Models\Package;
use App\Models\User;
use App\Models\DailyImages;
use App\Models\OrderPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Alert;
use App\Models\Career;
use App\Models\CareerUser;
use App\Models\DailyPercentage;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //    $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id_user  = Auth::id();
        $packages = OrderPackage::where('user_id', $id_user)->where('payment_status', 1)->where('status', 1)->orderBy('id', 'DESC')->get();
        $orderpackages = OrderPackage::where('user_id', $id_user)->orderBy('id', 'DESC')->limit(5)->get();

        $total_withdraw_requests = WithdrawRequest::where('user_id', $id_user)
            ->select(DB::raw('SUM(value) as total_withdraw_requests'))
            ->first();


        $bonus_day_total = Banco::where('user_id', $id_user)
            ->whereIn('description', [16])
            ->selectRaw('sum(price) as total')
            ->first();


        $total_packages = OrderPackage::select(DB::raw('SUM(price) as total_price'))
            ->where('payment_status', 1)
            ->where('status', 1)
            ->first();

        $value_perc = DailyPercentage::where('status', 1)
            ->where('user_id', $id_user)
            ->first();

        $per = $value_perc->value_perc ?? 0;
        $tota_pay_per_day =  ($total_packages->total_price * ($per / 100) / 30);


        $user = User::where('id', $id_user)->first();
        $images = DailyImages::all();
        $current_package = OrderPackage::where('user_id', $id_user)->first();
        $pacote = $user->orderPackage->first();
        $career = CareerUser::where('user_id', $user->id)->max('career_id');

        if (isset($career)) {
            $carrer = Career::find($career);
        } else {
            $carrer = Career::find(1);
        }

        $recomendation = User::where('recommendation_user_id', $user->id)->where('activated', 0)->get();

        $inactiverights = count($recomendation);

        if (empty($pacote)) {
            $name = '';
        } else {
            $name = $pacote->reference;
        }

        $from = date('Y-m-d');
        $to = date('Y-m-d', strtotime("-30 days", strtotime($from)));


        $bonususer = Banco::where('user_id', $user->id)
            ->whereIn('description', [1, 2, 4, 5])
            ->where('created_at', '>=', "$to 00:00:00")
            ->where('created_at', '<=', "$from 23:59:59")
            ->selectRaw('sum(price) as total')
            ->first();

        if (empty($bonususer)) {
            $totalbanco = 0;
        } else {
            $totalbanco = $bonususer->total;
        }

        $bonusdaily = Banco::where('user_id', $user->id)
            ->whereIn('description', [16])
            ->where('created_at', '>=', "$to 00:00:00")
            ->where('created_at', '<=', "$from 23:59:59")
            ->groupBy('user_id')
            ->selectRaw('sum(price) as total, user_id')
            ->first();

        if (empty($bonusdaily)) {
            $bonusdaily = 0;
        } else {
            $bonusdaily = $bonusdaily->total;
        }

        $pontos = HistoricScore::where('user_id', $user->id)
            ->where('created_at', '>=', "$to 00:00:00")
            ->where('created_at', '<=', "$from 23:59:59")
            ->selectRaw('sum(score) as total')
            ->first();

        if (empty($pontos)) {
            $pontos = 0;
        } else {
            $pontos = $pontos->total;
        }

        $data = array();
        $datasaida = array();
        $label = array();

        $from = date('Y-m-d');
        $toinicio = date('Y-m-d', strtotime("-30 days", strtotime($from)));
        $saque = 0;
        for ($i = 1; $i < 31; $i++) {

            $to = date('Y-m-d', strtotime("+$i days", strtotime($toinicio)));
            $bonususer = Banco::where('user_id', $user->id)
                ->whereIn('description', [1, 2, 4, 5])
                ->where('created_at', '>=', "$to 00:00:00")
                ->where('created_at', '<=', "$to 23:59:59")
                ->groupBy('created_at')
                ->selectRaw('sum(price) as total, DATE_FORMAT(created_at, "%Y-%m-%d") as created_at')
                ->orderby('created_at')
                ->first();

            $bonussaida = Banco::where('user_id', $user->id)
                ->where('created_at', '>=', "$to 00:00:00")
                ->where('created_at', '<=', "$to 23:59:59")
                ->where('description', '=', 99)
                ->groupBy('created_at')
                ->selectRaw('sum(price) as total, DATE_FORMAT(created_at, "%Y-%m-%d") as created_at')
                ->orderby('created_at')
                ->first();

            if (empty($bonususer)) {
                $total = 0;
            } else {
                $total = $bonususer->total;
            }

            if (empty($bonussaida)) {
                $totalsaida = 0;
            } else {
                $totalsaida = abs($bonussaida->total);
            }

            $saque += $totalsaida;

            $labelbonus = array(
                date('m-d-Y', strtotime($to))
            );

            $databonus = array(
                $total
            );

            $databonussaida = array(
                $totalsaida
            );

            $data = array_merge($data, $databonus);
            $datasaida = array_merge($datasaida, $databonussaida);
            $label = array_merge($labelbonus, $label);
        }
        $datasaida = json_encode($datasaida);
        $label = json_encode(array_reverse($label));
        $data = json_encode($data);

        Alert::success(__('backoffice_alert.home_welcome') . " " . $user->name . "!");

        $url_image_popup = asset('/images/logo_tiger.jpeg');

        setlocale(LC_MONETARY, "en_US");

        function formatDollars($dollars)
        {
            return "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
        }

        $investment = $request->input('investment', 10000);
        $monthly_add = $request->input('monthly_add', 0);
        $monthly_profit = $request->input('profit', 5) / 100;
        $i = 1;

        $month_counter = 1;
        $year_counter = 1;

        $table = array();

        while ($i < 121) {
            $total_month = $investment + ($investment * $monthly_profit) + $monthly_add + ($monthly_add * $monthly_profit);

            $table[$year_counter][$month_counter] = formatDollars($total_month);

            if ($month_counter == 12) {
                $month_counter = 1;
                $year_counter++;
            } else {
                $month_counter++;
            }

            $investment = $total_month;
            $i++;
        }

        $total_amount = OrderPackage::select(DB::raw('SUM(price) as total_amount'), 'payment_status')
            ->groupBy('payment_status')
            ->where('payment_status', 1)
            ->where('user_id', $id_user)
            ->first();

        //   dd($total_amount);
        $total_balance = Banco::select(DB::raw('SUM(price) as total_balance'))
            ->where('user_id', $id_user)
            ->first();

        $diretos = HistoricScore::where('user_id', auth()->user()->id)->where('level_from', 1)->distinct('user_id_from')->count();
        $indiretos = HistoricScore::where('user_id', auth()->user()->id)->where('level_from', '>' , 1)->distinct('user_id_from')->count();

        $totalNetwork = $diretos + $indiretos;
        $withDrawn = Banco::where('user_id', auth()->user()->id )->where('price', '>', 0)->sum('price');
        $profit = Banco::where('user_id', auth()->user()->id )->where('price', '>', 0)->where('description', 99)->sum('price');

        $invested = OrderPackage::where('user_id', auth()->user()->id)->sum('price');


        return view('home', compact('invested', 'packages', 'orderpackages', 'name', 'user', 'data', 'label', 'datasaida', 'totalbanco', 'bonusdaily', 'pontos', 'saque', 'carrer', 'inactiverights', 'url_image_popup', 'images', 'table', 'total_amount', 'total_balance', 'total_withdraw_requests', 'tota_pay_per_day', 'bonus_day_total', 'value_perc', 'diretos', 'indiretos', 'totalNetwork', 'withDrawn'));
    }

    public function welcome()
    {
       $packages = Package::where('type', 'packages')->where('activated', 1)->orderBy('price')->get();
       return view('welcome.welcome', compact('packages'));
    }

    public function about()
    {
       $packages = Package::where('type', 'packages')->where('activated', 1)->orderBy('price')->get();

       return view('welcome.about', compact('packages'));
    }

    public function fees()
    {
        $packages = Package::where('type', 'packages')->where('activated', 1)->orderBy('price')->get();
        return view('welcome.fees', compact('packages'));
    }

    public function disclaimer()
    {
        return view('welcome.disclaimer');
    }

    public function disclaimer1()
    {
        return view('welcome.disclaimer1');
    }
}
