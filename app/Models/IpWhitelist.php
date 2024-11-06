<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpWhitelist extends Model
{
    use HasFactory;

    protected $table = 'ip_whitelist';

    protected $fillable = [
        'ip',
        'login',
        'password',
        'activated',
        'updated_at',
        'created_at',
    ];
}
