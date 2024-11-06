<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PercentageRegisterRequest;
use App\Models\DailyPercentage;
use App\Models\User;
use App\Traits\CustomLogTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PercentageAdminController extends Controller
{
    use CustomLogTrait;
    protected $dailyPercentage;

    public function __construct(DailyPercentage $dailyPercentage)
    {
        $dailyPercentage = $dailyPercentage;
    }

    public function index()
    {
        $bonus_All = DailyPercentage::orderBy('daily_percentage.id', 'desc') ->join('users', 'users.id', '=', 'daily_percentage.user_id')->get();
        return view('admin.dailyBonus.list', compact('bonus_All')); 
    }

    public function create()
    {
        $users = User::where('activated', 1)->get();
        return view('admin.dailyBonus.create', compact('users'));
    }

    public function create_id($id)
    {
        $users = User::where('id', $id)->get();
        return view('admin.dailyBonus.create', compact('users'));
    }

    public function inactivate($id)
    {
        try {
            $config = DailyPercentage::find($id);
            $config->status = 0;
            $config->updated_at = date("d-m-Y H:i:s");
            $config->update();
            $this->createLog('Daily Bonus removed successfully', 204, 'success', auth()->user()->id);
            flash(__('admin_alert.configremove'))->success();
            return redirect()->route('admin.bonus-daily.list');
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.confignotremove'))->error();
            return redirect()->back();
        }
    }

    public function activate($id)
    {
        try {
            DB::beginTransaction();
            $config = DailyPercentage::find($id);
            $config->status = 1;
            $config->updated_at = date("Y-m-d H:i:s");
            $config->update();
            $this->createLog('Daily Bonus updated successfully', 204, 'success', auth()->user()->id);
            flash(__('admin_alert.configurationupdate'))->success();
            DB::commit();
            return redirect()->route('admin.bonus-daily.list');
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.configurationotnupdate'))->error();
            return redirect()->back();
        }
    }

    public function store(PercentageRegisterRequest $percentageRegisterRequest)
    {
        try {
            $check = DailyPercentage::where('date_save', $percentageRegisterRequest->date_save)->where('user_id', $percentageRegisterRequest->user_id)->exists();
            if ($check) {
                throw new Exception("A record already exists for the user on that date!", 1);
            }
            DB::beginTransaction();
            DailyPercentage::create([
                'value_perc' => $percentageRegisterRequest->value_perc,
                'status' => $percentageRegisterRequest->status,
                'user_id' => $percentageRegisterRequest->user_id,
                'date_save' => $percentageRegisterRequest->date_save,
                'created_at' => date("Y-m-d H:i:s")
            ]);
            $this->createLog('Daily Bonus added successfully', 204, 'success', auth()->user()->id);
            flash(__('admin_alert.configcreate'))->success();
            DB::commit();
            return redirect()->route('admin.bonus-daily.list');
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__('admin_alert.configcreate'))->error();
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $config = DailyPercentage::find($id);
        return view('admin.dailyBonus.edit', compact('config'));
    }

    public function update(Request $request, $id)
    {
        try {
            $config = DailyPercentage::find($id);
            $config->update([
                'value_perc' => $request->value_perc,
                'status' => $request->status,
                'updated_at' => date("Y-m-d H:i:s")
            ]);
            $this->createLog('Daily Bonus updated successfully', 200, 'success', auth()->user()->id);
            flash(__("admin_alert.configurationupdate"))->success();
            return redirect()->route('admin.bonus-daily.list');
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            flash(__("admin_alert.configurationotnupdate"))->error();
            return redirect()->route('admin.bonus-daily.list');
        }
    }
}
