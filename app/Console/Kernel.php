<?php

namespace App\Console;

use App\Http\Controllers\Admin\PackageAdminController;
use Illuminate\Console\Scheduling\Schedule;
use App\Http\Controllers\Admin\PayWithdrawAdminController;
use App\Http\Controllers\CompensationController;
use App\Http\Controllers\DailyProfitBonusCronController;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            PayWithdrawAdminController::update();
        })->everyFiveMinutes();
        $schedule->call(function () {
            PackageAdminController::orderUpdateKYC();
        })->everyFiveMinutes();

        $schedule->call(function () {
            $controller = new DailyProfitBonusCronController;
            $controller->runCron();
        })->everyMinute();

        $schedule->call(function () {
            CompensationController::dailyCron();
        })->everySixHours();
        $schedule->call(function () {
            CompensationController::anualCron();
        })->daily();
        $schedule->call(function () {
            CompensationController::aggregatorCron();
        })->dailyAt('00:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
