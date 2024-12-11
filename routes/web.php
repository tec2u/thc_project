<?php

use App\Http\Controllers\Admin\AffiliateNetwork\AffiliateNetworkController;
use App\Http\Controllers\Admin\AffiliateNetwork\LinksController;
use App\Http\Controllers\Admin\AffiliateNetwork\ProgramController;
use App\Http\Controllers\Admin\ConfigBonusController;
use App\Http\Controllers\Admin\InvestmentAdminController;
use App\Http\Controllers\Admin\IpWhitelistAdminController;
use App\Http\Controllers\Admin\IpBlacklistAdminController;
use App\Http\Controllers\Admin\MyPerformance\MonthlyProfiftsController;
use App\Http\Controllers\Admin\PackageAdminController;
use App\Http\Controllers\Admin\PercentageAdminController;
use App\Http\Controllers\Admin\Purchase\PurchaseController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\WithdrawsAdminController;
use App\Http\Controllers\Admin\ReportsAdminController;
use App\Http\Controllers\Admin\SettingsAdminController;
use App\Http\Controllers\Admin\VerifyOrderUserAdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompensationController;
use App\Http\Controllers\Admin\DocumentAdminController;
use App\Http\Controllers\Campaign\CampaignController;
use App\Http\Controllers\Campaign\FunnelLeadController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HistoricScoreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IpWhitelistController;
use App\Http\Controllers\LangingController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PoolPredictionController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
use App\Mail\UserRegisteredEmail;
use App\Models\ConfigBonusunilevel;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#region pagina inicial
// Route::get('/', function () {
//    return view('welcome.welcome');
// });

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

//Apagar depois do teste
// Route::get('/cronAnual', function () {
//     CompensationController::anualCron();
// });
// Route::get('/cronDiario', function () {
//     CompensationController::dailyCron();
// });
//Fim


Route::get('/landing-asset-acceleration', function () {
    return view('welcome.landing-asset-acceleration');
});


Route::get('/landing-company-formation', function () {
    return view('welcome.landing-company-formation');
});

Route::get('/landing-anding-academy', function () {
    return view('welcome.landing-academy');
});

Route::get('/landing-digitalization', function () {
    return view('welcome.landing-digitalization');
});

Route::get('/landing-5', function () {
    return view('welcome.landing-5');
});

Route::get('/landing-6', function () {
    return view('welcome.landing-6');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'welcome')->name('.welcome');
    Route::get('/fees', 'fees')->name('.fees');
    Route::get('/disclaimer', 'disclaimer')->name('.disclaimer');
});

Route::get('/blog', function () {
    return view('welcome.blog');
});

Route::get('/landingpage', function () {
    return view('welcome.landingpage');
});


Route::get('/partners', function () {
    return view('welcome.partners');
});

Route::get('/rewards', function () {
    return view('welcome.rewards');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/cards', function () {
    return view('welcome.cards');
});

Route::get('/faq', function () {
    return view('welcome.faq');
});

Route::get('/concierge', function () {
    return view('welcome.concierge');
});

Route::get('/accounts', function () {
    return view('welcome.accounts');
});

Route::get('/contact', function () {
    return view('welcome.contact');
});

Route::get('/aboutus', function () {
    return view('welcome.aboutus');
});

Route::get('/roadmap', function () {
    return view('welcome.roadmap');
});

Route::get('/features', function () {
    return view('welcome.features');
});

Route::get('/adesao', function () {
    return view('adesao'); //apagar
});

Route::get('/paymentadesao', function () {
    return view('paymentadesao'); //apagar
});

Route::get('/payment', function () {
    return view('payment'); //apagar
});

Route::get('/userpackageinfo', function () {
    return view('userpackageinfo');
});

#endregion
Route::get('/rede', function () {
    return view('network.rede');
});

Route::get('/supporttickets', function () {
    return view('supporttickets');
});


Route::get('/admin/investment', function () {
    return view('admin.investment.investment');
});

Route::get('/admin/support', function () {
    return view('admin.support.support');
});

Route::get('/admin/answer_chat', function () {
    return view('admin.support.answerChat');
});

Route::get('/admin/close_chat', function () {
    return view('admin.support.closeChat');
});

Route::get('/admin/reopen_chat', function () {
    return view('admin.support.reopenChat');
});

Route::get('/admin/membersList', function () {
    return view('admin.members.membersList');
});

Route::get('/admin/mlmCharge', function () {
    return view('admin.settings.mlmCharge');
});


Route::get('/admin/general', function () {
    return view('admin.settings.general');
});

Route::get('/admin/smtp', function () {
    return view('admin.settings.smtp');
});

Route::get('/admin/rede', function () {
    return view('admin.users.rede');
});

//Route::post('/teste', [App\Http\Controllers\PaymentController::class, 'notity'])->name('notity');
Auth::routes();

/**
 * Link teste
 */
// Route::get('/teste2', [App\Http\Controllers\MigraController::class, 'index'])->name('index');




/**
 * Backoffice Route
 */
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'welcome')->name('.welcome');
    Route::get('/about', 'about')->name('about');
});

Route::prefix('home')->middleware('auth')->name('home')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('.home');
        Route::post('/', 'index')->name('.calculate');
    });
});

Route::post('/packages/packagepay/notify', [PackageController::class, 'notify'])->name('notify.payment');

Route::prefix('packages')->middleware('auth')->name('packages')->group(function () {
    Route::controller(PackageController::class)->group(function () {
        Route::get('/packages', 'index')->name('.index');
        Route::get('/packagesActivator', 'packagesActivator')->name('.packagesActivator');
        Route::get('/packageslog', 'package')->name('.packagelog');
        Route::get('/{id}/hide', 'hide')->name('.hide');
        Route::get('/packages/{id}', 'detail')->name('.detail');
        Route::post('/packagepay/crypto', 'payCrypto')->name('.payCrypto');
        Route::post('/packagepay/crypto/new', 'payCryptoNode')->name('.payCryptoNode');
        Route::get('/packagepay/{id}', 'packagepay')->name('.packagepay');
    });
});

Route::prefix('my-performance')->middleware('auth')->name('performance')->group(function () {
    Route::prefix('monthly-profits')->middleware('auth')->group(function () {
        Route::controller(MonthlyProfiftsController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
        });
    });
});

Route::prefix('purchase')->middleware('auth')->name('purchase')->group(function () {
    Route::controller(PurchaseController::class)->group(function () {
        Route::get('/purchase', 'purchase')->name('.purchase');
        Route::get('/cart', 'cart')->name('.cart');
        Route::get('/linkToRegister', 'linkToRegister')->name('.linkToRegister');
        Route::get('/infinityClub', 'infinityClub')->name('.infinityClub');
        Route::get('/E-Wallet', 'eWallet')->name('.eWallet');
        Route::get('/fiatViaRevolut', 'fiatViaRevolut')->name('.fiatViaRevolut');
    });
});


Route::prefix('campaign')->middleware('auth')->name('campaign')->group(function () {
    Route::controller(CampaignController::class)->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/funnel', 'funnel')->name('.funnel');
        Route::post('/', 'store')->name('.store');
        Route::get('/delete/{id?}', 'destroy')->name('.delete');
        Route::get('/get/{id?}', 'get')->name('.get');
        Route::post('/update', 'update')->name('.update');
    });
});

Route::prefix('funnel')->name('funnel')->group(function () {
    Route::controller(FunnelLeadController::class)->group(function () {
        Route::post('/store', 'store')->name('.store');
        Route::get('/', 'index')->name('.link.shared');
    });
});



Route::prefix('affiliate-network')->middleware('auth')->name('affiliate')->group(function () {
    Route::controller(AffiliateNetworkController::class)->group(function () {
        Route::get('/program', 'theProgramm')->name('.program');
        Route::get('/', 'myAffiliateLinks')->name('.links.redir');
        Route::get('/transactions', 'transactions')->name('.transactions');
    });
});

Route::prefix('withdraws')->middleware('auth')->name('withdraws')->group(function () {
    Route::controller(WithdrawController::class)->group(function () {
        Route::get('/withdrawRequests', 'withdrawRequests')->name('.withdrawRequests');
        Route::get('/withdrawLog', 'withdrawLog')->name('.withdrawLog');
        Route::get('/withdrawBonus', 'withdrawBonus')->name('.withdrawBonus');
        Route::post('/', 'store')->name('.store');
        Route::post('/bonus', 'bonus')->name('.bonus');
    });
});

Route::prefix('networks')->middleware('auth')->name('networks')->group(function () {
    Route::controller(NetworkController::class)->group(function () {
        Route::get('/{parameter}/mytree', 'mytree')->name('.mytree');
        Route::get('/{parameter}/mytreediferente', 'mytreediferente')->name('.mytreediferente');
        Route::get('/myreferrals', 'myreferrals')->name('.myreferrals');
    });
});

Route::prefix('networks')->middleware('auth')->name('networks')->group(function () {
    Route::controller(NetworkController::class)->group(function () {
        Route::get('/{parameter}/mytree', 'mytree')->name('.mytree');
        Route::get('/myreferrals', 'myreferrals')->name('.myreferrals');
        Route::get('/associatesReport', 'associatesReport')->name('.associatesReport');
        Route::post('associates/pesquisa', 'pesquisa')->name('.pesquisa');
    });
});

Route::prefix('supports')->middleware('auth')->name('supports')->group(function () {
    Route::controller(ChatController::class)->group(function () {
        Route::get('/supporttickets', 'index')->name('.supporttickets');
        Route::post('/', 'store')->name('.store');
        Route::get('/answer_chat/{id}', 'answerChat')->name('.answerChat');
        Route::post('/answer_chat/{id}', 'createMessage')->name('.createMessage');
        Route::get('/close_chat/{id}', 'closeChat')->name('.closeChat');
        Route::get('/reopen_chat/{id}', 'reopenChat')->name('.reopenChat');
    });
});

Route::get('/marketing', function () {
    return view('marketing.marketing');
});

Route::prefix('reports')->middleware('auth')->name('reports')->group(function () {
    Route::controller(ReportsController::class)->group(function () {
        Route::get('/bonusDaily/{month?}/{year?}', 'bonusdaily')->name('.bonusdaily');
        Route::get('/signupcommission', 'signupcommission')->name('.signupcommission');
        Route::get('/rankReward', 'rankReward')->name('.rankReward');
        Route::get('/levelIncome', 'levelIncome')->name('.levelIncome');
        Route::get('/stakingRewards', 'stakingRewards')->name('.stakingRewards');
        Route::get('/monthlyCoins', 'monthlyCoins')->name('.monthlyCoins');
        Route::get('/transactions', 'transactions')->name('.transactions');
        Route::get('/poolcommission', 'poolcommission')->name('.poolcommission');
    });
    Route::get('/pool', [PoolPredictionController::class, 'summarizeLevels'])->name('.pool');
});
Route::prefix('indication')->name('indication')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/{id}/register', 'register')->name('.register');
    });
    Route::controller(LangingController::class)->group(function () {
        Route::get('/{id}/landing', 'index')->name('.index');
    });
});

Route::prefix('users')->middleware('auth')->name('users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('.index');
        Route::put('/{id}/update', 'update')->name('.update');
        Route::get('/password', 'password')->name('.password');
        Route::put('/password/change', 'changePassword')->name('.change.password');
        Route::get('/{id}/register', 'register')->name('.register');
    });
});

Route::prefix('document')->middleware('auth')->name('document')->group(function () {
    Route::controller(DocumentController::class)->group(function () {
        Route::get('/list', 'index')->name('.index');
        Route::post('/upload', 'store')->name('.upload');
    });
});

Route::prefix('payment')->middleware('auth')->name('payment')->group(function () {
    Route::controller(PaymentController::class)->group(function () {
        Route::post('/payment', 'indexPost')->name('.paymentPost');
        Route::post('/payment/notity', 'notity')->name('.notity');
        Route::get('/payment/{package}/{value}', 'index')->name('.payment');
        Route::get('/paymentUSDTERC/{package}/{value}', 'indexUSDTERC')->name('.paymentUSDTERC');
        Route::get('/paymentBTC/{package}/{value?}', 'indexBTC')->name('.paymentBTC');
        Route::get('/subscriptionClub/{package}', 'subscriptionClub')->name('.subscriptionClub');
        Route::get('/payment-simulator/{package}/{value}', 'paymentSimulator')->name('.payment_simulator');
    });
});


/**
 * Admin Route
 */
Route::prefix('admin')->middleware(['auth', 'is.admin'])->name('admin')->group(function () {

    Route::prefix('reports/order-bonus')->name('.order-bonus')->group(function () {
        Route::controller(VerifyOrderUserAdminController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
            Route::get('/export-report', 'export')->name('.export');
            Route::get('/list', 'list')->name('.list.pay');
            Route::get('/list-date-pay', 'listBonusDaily')->name('.list.bonus');
            Route::get('/list-bonus-day/{data}', 'listBonusDailyAll')->name('.list-bonus-day');
            Route::get('/bonus-daily-user', 'verifyUserOder')->name('.store');
        });
    });

    Route::prefix('document')->name('.document')->group(function () {
        Route::controller(DocumentAdminController::class)->group(function () {
            Route::get('/list', 'index')->name('.index');
            Route::get('/edit/{id}', 'edit')->name('.edit');
            Route::post('/update/{id}', 'update')->name('.update');
        });
    });

    Route::prefix('bonus-daily')->name('.bonus-daily')->group(function () {
        Route::controller(PercentageAdminController::class)->group(function () {
            Route::get('/', 'index')->name('.list');

            Route::post('/', 'store')->name('.store');
            Route::get('/create', 'create')->name('.create');
            Route::get('/{id}/create', 'create_id')->name('.create_id');
            Route::get('/{id}/edit', 'edit')->name('.edit');
            Route::put('/{id}/update', 'update')->name('.update');
            Route::get('/{id}/remove', 'inactivate')->name('.inactivate');
            Route::get('/{id}/activate', 'activate')->name('.activate');
        });
    });

    Route::get('/home', [App\Http\Controllers\HomeAdminController::class, 'indexAdmin'])->name('.home');

    Route::prefix('reports/UsernameUpToMaster')->name('.UsernameUpToMaster')->group(function () {
        Route::controller(App\Http\Controllers\Admin\UsernameUpToMasterController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
            Route::post('/searchUser', 'searchUserToMaster')->name('.searchUserToMaster');
        });
    });

    Route::prefix('reports/RegistrationsWithDate')->name('.RegistrationsWithDate')->group(function () {
        Route::controller(App\Http\Controllers\Admin\RegistrationsWithDateController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
        });
    });
    Route::prefix('reports/UsersByCountry')->name('.UsersByCountry')->group(function () {
        Route::controller(App\Http\Controllers\Admin\UsersByCountryController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
        });
    });

    Route::prefix('packages')->name('.packages')->group(function () {
        Route::controller(PackageAdminController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
            Route::get('/orderPackages', 'orderPackages')->name('.orderPackages');
            Route::post('/', 'store')->name('.store');
            Route::get('/{parameter}/orderfilter', 'orderfilter')->name('.orderfilter');
            Route::post('/search', 'search')->name('.search');
            Route::get('/{parameter}/filter', 'packageFilter')->name('.filter');
            Route::post('/getDateOrders', 'getDateOrders')->name('.getDateOrders');
            Route::get('/create', 'create')->name('.create');
            Route::post('/searchOrders', 'searchOrders')->name('.searchOrders');
            Route::get('/{id}/edit', 'edit')->name('.edit');
            Route::put('/{id}/update', 'update')->name('.update');
            Route::put('/{id}/orderupdate', 'orderupdate')->name('.orderupdate');
            Route::delete('/{id}/remove', 'destroy')->name('.delete');
            Route::get('/payall', 'payall')->name('.payall');
        });
    });
    Route::prefix('configBonus')->name('.configBonus')->group(function () {
        Route::controller(ConfigBonusController::class)->group(function () {
            Route::get('/', 'index')->name('.list');
            Route::post('/', 'store')->name('.store');
            Route::get('/create', 'create')->name('.create');
            Route::get('/{id}/edit', 'edit')->name('.edit');
            Route::put('/{id}/update', 'update')->name('.update');
            Route::get('/{id}/remove', 'inactivate')->name('.inactivate');
            Route::get('/{id}/activate', 'activate')->name('.activate');
            Route::get('/removeall', 'inactivateall')->name('.inactivateall');
            Route::get('/activateall', 'activateall')->name('.activateall');
        });
    });
    Route::prefix('users')->name('.users')->group(function () {
        Route::controller(UserAdminController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
            Route::get('/inactive', 'indexInactive')->name('.indexinactive');
            Route::get('/ban', 'indexBan')->name('.indexban');
            Route::get('/{id}/ban', 'ban')->name('.ban');
            Route::get('/{id}/inactive', 'inactive')->name('.inactive');
            Route::get('/myinfo', 'myinfo')->name('.myinfo');
            Route::get('/{id}/edit', 'edit')->name('.edit');
            Route::put('/{id}/update', 'update')->name('.update');
            Route::get('/{id}/dashboard', 'dashboard')->name('.dashboard');
            Route::post('/', 'store')->name('.store');
            Route::post('/search', 'search')->name('.search');
            Route::get('/{parameter}/network', 'networkuser')->name('.network');
            Route::get('/{parameter}/networkdiferente', 'networkuserdiferente')->name('.networkdiferente');
            Route::get('/create', 'create')->name('.create');
            Route::get('/password', 'password')->name('.password');
            Route::get('/searchUsers', 'searchUsers')->name('.searchUsers');
            Route::put('/password/change', 'changePassword')->name('.change.password');
            Route::get('/{id}/specialcomission', 'specialcomission')->name('.specialcomission');
            Route::put('/{id}/upspecialcomission', 'upspecialcomission')->name('.upspecialcomission');
            Route::get('/{parameter}/filter', 'UsersFilter')->name('.filter');
            Route::get('/{id}/transactions', 'transactions')->name('.transactions');
        });
    });
    Route::prefix('investment')->name('.investment')->group(function () {
        Route::controller(InvestmentAdminController::class)->group(function () {
            Route::get('/', 'index')->name('.index');
        });
    });
    Route::prefix('reports')->name('.reports')->group(function () {
        Route::controller(ReportsAdminController::class)->group(function () {
            Route::get('/signupcommission', 'signupcommission')->name('.signupcommission');
            Route::get('/searchSignup', 'searchSignup')->name('.searchSignup');
            Route::get('/getDateSignup', 'getDateSignup')->name('.getDateSignup');
            Route::get('/rankReward', 'rankReward')->name('.rankReward');
            Route::get('/searchrankReward', 'searchrankReward')->name('.searchrankReward');
            Route::get('/searchDataRank', 'getDaterankReward')->name('.getDaterankReward');
            Route::get('/levelIncome', 'levelIncome')->name('.levelIncome');
            Route::get('/stakingRewards', 'stakingRewards')->name('.stakingRewards');
            Route::get('/searchstakingRewards', 'searchstakingRewards')->name('.searchstakingRewards');
            Route::get('/searchDataRewards', 'getstakingRewards')->name('.getstakingRewards');
            Route::get('/monthlyCoins', 'monthlyCoins')->name('.monthlyCoins');
            Route::get('/searchMonthly', 'searchMonthly')->name('.searchMonthly');
            Route::get('/select', 'getDateMonthly')->name('.getDateMonthly');
            Route::get('/transactions', 'transactions')->name('.transactions');
            Route::get('/searchTransactions', 'searchTransactions')->name('.searchTransactions');
            Route::get('/searchDataTransactions', 'getDateTransactions')->name('.getDateTransactions');
            Route::get('/searchLevelIncome', 'searchLevelIncome')->name('.searchLevelIncome');
            Route::get('/searchData', 'getDateLevelIncome')->name('.getDateLevelIncome');
            Route::get('/poolcommission', 'poolcommission')->name('.poolcommission');
            Route::get('/searchPool', 'searchPool')->name('.searchPool');
            Route::get('/getDatePool', 'getDatePool')->name('.getDatePool');
        });
    });
    Route::prefix('withdraws')->name('.withdraw')->group(function () {
        Route::controller(WithdrawsAdminController::class)->group(function () {
            Route::get('/withdrawRequests', 'withdrawRequests')->name('.withdrawRequests');
            Route::get('/withdrawLog', 'withdrawLog')->name('.withdrawLog');
            Route::put('/{id}/update', 'update')->name('.update');;
        });
    });
    Route::prefix('settings')->name('.settings')->group(function () {
        Route::controller(SettingsAdminController::class)->group(function () {
            Route::get('/mlmLevel', 'mlmLevel')->name('.mlmLevel');
            Route::get('/{id}/edit', 'edit')->name('.edit');
            Route::put('/{id}/update', 'update')->name('.update');
            Route::get('/indication', 'indication')->name('.indication');
            Route::post('/', 'store')->name('.store');
            Route::get('/create', 'create')->name('.create');
            Route::get('/{id}/edit', 'editVideo')->name('.editVideo');
            Route::post('/{id}/update', 'updateVideo')->name('.updateVideo');
            Route::get('/system', 'systemuser')->name('.system');
            Route::put('/upsystemconfig', 'upsystemconfig')->name('.upsystemconfig');
        });
    });

    Route::prefix('whitelist')->name('.whitelist')->group(function () {
        Route::controller(IpWhitelistAdminController::class)->group(function () {
            Route::get('/whitelist', 'whitelist')->name('.whitelist');
            Route::get('/create', 'create')->name('.create');
            Route::post('/', 'store')->name('.store');
            Route::get('/{id}/inactive', 'inactive')->name('.inactive');
            Route::get('/{id}/activated', 'activated')->name('.activated');
        });
    });

    Route::prefix('blacklist')->name('.blacklist')->group(function () {
        Route::controller(IpBlacklistAdminController::class)->group(function () {
            Route::get('/blacklist', 'blacklist')->name('.blacklist');
            Route::delete('/{id}/remove', 'destroy')->name('.delete');
        });
    });


    Route::get('/support', [App\Http\Controllers\Admin\ChatAdminController::class, 'index'])->name('.support');

    Route::get('/payWithdraw/{id}', [App\Http\Controllers\Admin\PayWithdrawAdminController::class, 'index'])->name('.payWithdraw');

    Route::get('/payWithdrawCC/{id}', [App\Http\Controllers\Admin\PayWithdrawAdminController::class, 'indexCC'])->name('.payWithdrawCC');

    Route::get('/answer_chat/{id}', [App\Http\Controllers\Admin\ChatAdminController::class, 'answerChat'])->name('.answerChat');
    Route::post('/answer_chat/{id}', [App\Http\Controllers\Admin\ChatAdminController::class, 'createMessage'])->name('.createMessage');

    Route::get('/close_chat/{id}', [App\Http\Controllers\Admin\ChatAdminController::class, 'closeChat'])->name('.closeChat');

    Route::get('/reopen_chat/{id}', [App\Http\Controllers\Admin\ChatAdminController::class, 'reopenChat'])->name('.reopenChat');

    Route::get('/startCronDaily', function () {
        return view('admin.dailyBonus.startCronDaily');
    })->name('.start-cron-daily');

    Route::get('/cronDaily', function () {
        CompensationController::dailyCron();
        return redirect()->route('admin.order-bonus.list.bonus');
    })->name('.cron-daily');
});

use App\Models\User;
use Illuminate\Support\Facades\Mail;



Route::get('/email', function () {


    // PoolPredictionController::summarizeLevels();
    // $user = User::find(1);

    // Mail::to($user->email)->send(new UserRegisteredEmail($user));
});
