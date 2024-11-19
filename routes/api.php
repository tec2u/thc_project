<?php

use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Campaign\CampaignController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(PaymentController::class)->group(function(){
    Route::post('/notity','notity')->name('notity');//autentica login de usuarios
});

Route::post('/packages/packagepay/notify', [PackageController::class, 'notify'])->name('notify.payment');



Route::prefix('campaing')->name('campaing')->group(function () {
    Route::controller(CampaignController::class)->group(function () {
        Route::post('/store', 'store')->name('.store');
    });
});
