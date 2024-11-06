<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\DailyPercentage;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'banco';

    protected $fillable = [
        'user_id',
        'order_id',
        'description',
        'price',
        'date_save',
        'status',
        'created_at',
        'updated_at',
        'level_from',
        'percent_pay'
    ];

    /*
    Relacionamento de Tabelas
    */

    #region
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function config_bonus()
    {
        return $this->belongsTo(ConfigBonus::class, 'description');
    }

    public function getUserOrder($id)
    {
        $user_from = OrderPackage::find($id);
        if($user_from != null){
            return $user_from->user->name;
        } else return "";
    }


    public function getUserEspecialCommission($id)
    {
        $user_from = OrderPackage::find($id);
        return $user_from->user;
    }

    public function getOrder($id_order)
    {
        return  OrderPackage::find($id_order);
    }


    public static function verifyBonusDaily($id_order)
    {
        return Banco::where('order_id', $id_order)->first();
    }

    public function getTotalMonth($month, $year = null)
    {
        $year_code =  $year  ?? date("Y");
        return Banco::whereIn('description', ['15', '16', '17', '18'])
            ->select(DB::raw('SUM(price) as total_sales'))
            ->where('created_at', '>=', $year_code . "-" . $month . "-01" . " 00:00:00")
            ->where('created_at', '<=', $year_code . "-" . $month . "-31" . " 23:59:59")
            ->where('user_id', Auth::user()->id)
            ->first();
    }

    public function getUserLogin()
    {
        $user = User::find($this->user_id);
        return $user->login;
    }

    public function getPercentage()
    {
        if ($this->description == '15') {
            return "2%";
        } else if ($this->description == '16') {
            $daily_percentage = DailyPercentage::where('user_id', $this->user_id)->where('status', 1)->where('date_save', '<=', date('Y-m-d', strtotime($this->created_at)))->where('created_at', '<', $this->created_at)->orderBy('id', 'desc')->first();
            if ($daily_percentage == null) {
                $daily_percentage = json_decode(json_encode(array('value_perc' => 0.5)));
            }
            return strval($daily_percentage->value_perc) . "% / Month";
        } else if ($this->description == '17') {
            return "12%";
        } else if ($this->description == '18') {
            return "0%";
        }
    }
    #endregion
}
