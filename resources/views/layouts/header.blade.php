<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-family: Poppins, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>THC - The Healing Company</title>
    <link rel="icon" type="image/png" href="../../../assetsWelcome/images/favinig.png" />

    <!-- Fonts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assetsWelcome/css/styles.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.7/flipclock.css">
    <link rel="stylesheet" type="text/css" href="../../assetsWelcome/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../../assetsWelcome/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.7/flipclock.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>


</head>
<!-- <style>
    .half-screen {
        width: 100%;
        height: 28%;
        background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
        position: absolute;
        top: 0;
        left: 0;
    }

    @media (min-width: 1400px) {
        .half-screen {
            width: 100%;
            height: 18%;
            background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (min-width: 1366px) {
        .half-screen {
            width: 100%;
            height: 24%;
            background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (min-width: 1879px) {
        .half-screen {
            width: 100%;
            height: 20%;
            background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (max-width: 1200px) {
        .half-screen {
            width: 100%;
            height: 24%;
            background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (max-width: 780px) {
        .half-screen {
            width: 100%;
            height: 26%;
            background-image: linear-gradient(to right, #171917, #6a6767, #171917) !important;
            position: absolute;
            top: 0;
            left: 0;
        }
    }
</style> -->

<body>
    <div class="half-screen"></div>
    <!-- ======= Header ======= -->
    @include('sweetalert::alert')
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto navbar-expand-lg">

            <ul class="d-flex align-items-center">

                <li class=" pe-4"><a href="#" class="telenav"><i class="lab la-telegram iconhead"></i> </a> </li>
                <li class=" pe-4"><a href="#" class="telenav">
                        <h6 class="text-dark-50 joinhead">Join our </br>Telegram Channel</h6>
                    </a> </li>

                <!-- <li class="nav-item dropdown pe-3">
                    <div class="btn-group">
                        <button class="btn dropdown-toggle btn-lang" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            @lang('header.language')
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/setlocale/en"><img src="../assetsWelcome/images/flaguk.png" style="width: 18px;margin-right:10px" alt="...">@lang('header.english')</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/setlocale/de"><img src="../assetsWelcome/images/flagger.png" style="width: 18px;margin-right:10px" alt="...">@lang('header.german')</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                            <a href="" class="mx-1"><i class="fab fa-facebook-f fb-icon"></i></a>
                            <a href="" class="mx-1"><i class="fab fa-twitter twitter-icon"></i></a>
                            <a href="" class="mx-1"><i class="fab fa-instagram ig-icon"></i></a>
                            <a href="" class="mx-1"><i class="fab fa-linkedin-in linkedin-icon"></i></a>
                            <a href="" class="mx-1"><i class="fab fa-whatsapp wa-icon"></i></a>
                            <a href="" class="mx-1"><i class="fab fa-tiktok tiktok-icon"></i></a>
                <li class="nav-item dropdown pe-3">

                    <!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> -->
<!--
                        @if (!empty(auth()->user()->image_path))
                        <img src="{{ asset('storage/' . auth()->user()->image_path) }}" alt="Profile" class="rounded-circle">
                        @else
                        <img src="../../../assetsWelcome/images/favinig.png" alt="Profile" class="rounded-circle">
                        @endif -->

                        <!-- <span class="d-none d-md-block dropdown-toggle ps-2">{{ ucwords(auth()->user()->name) }}</span> -->
                    <!-- </a> -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ ucwords(auth()->user()->name) }}</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center alog" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right iconlog"></i>
                                <span>@lang('header.sign_out')</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <a href="{{ route('home.home') }}">
            <img class="imagetest2" src="{{ asset('images/nigcoin.png') }}" alt="">
        </a>
        <ul class="sidebar-nav" id="sidebar-nav">
           {{-- 
            <li class="nav-item">
                <a class="nav-link " href="{{ route('home.home') }}">
                    <i class="bi bi-grid"></i>
                    <span>
                       <!-- My Performance -->
                        @lang('header.li1')
                    </span>
                </a>
            </li><!-- End Dashboard Nav -->
            --}}
            <a href="{{ route('home.home') }}">
                <img class="imagetest2 rounded" src="{{ asset('images/modelo-man.jpg') }}" alt="">
            </a>
            <div class="d-flex flex-column align-items-center">
                <div>
                    welcome: {{ auth()->user()->name }} {{ auth()->user()->last_name }}
                </div>
                <div>
                    available: $9999,99
                </div>
            </div>
            <li class="nav-item">

                <a class="nav-link collapsed" href="{{ route('home.home') }}">
                    <i class="bi bi-house"></i>
                    <span>HOME</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#minting-nav" href="#" onclick="event.preventDefault(); window.location.href='{{ route('purchase.purchase') }}';">
                    <i class="bi bi-clipboard2-minus"></i><span>INVEST <!-- @lang('header.li2') --></span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="minting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href=" {{ route('packages.index') }} ">
                            <i class="bi bi-circle"></i><span>
                                @lang('header.li4')
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('packages.packagelog') }}">
                            <i class="bi bi-circle"></i><span>
                                @lang('header.li6')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-wallet2"></i><span>@lang('header.withdraw')</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('withdraws.withdrawBonus') }}">
                            <i class="bi bi-circle"></i><span>@lang('header.withdraw_request')</span>
                        </a>
                    </li>
                    <li>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('withdraws.withdrawLog') }}">
                            <i class="bi bi-circle"></i><span>@lang('header.withdraw_log')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#networks-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>
                        {{-- @lang('header.networks') --}}
                        @lang('header.li7')
                    </span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="networks-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

            </li>
            {{--
            <li>
                <a href="{{ route('affiliate.links.redir') }}">
            <i class="bi bi-circle"></i><span>
            @lang('header.li8')
            </span>
            </a>
            </li> --}}

            <li>
                <a href=" {{ route('affiliate.program') }} ">
                    <i class="bi bi-circle"></i><span>
                        {{-- @lang('header.associates') --}}
                        @lang('header.li9')
                    </span>
                </a>
            </li>


            <li>
                <a href="{{ route('networks.mytree', ['parameter' => auth()->user()->id]) }}">
                    <i class="bi bi-circle"></i><span>
                        {{-- @lang('header.referral_comission') --}}
                        @lang('header.li10')
                    </span>
                </a>
            </li>

            <li>
                <a href="  {{ route('networks.associatesReport') }}">
                    <i class="bi bi-circle"></i><span>
                        {{-- @lang('header.referral_comission') --}}
                        @lang('header.li11')
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('networks.myreferrals') }}">
                    <i class="bi bi-circle"></i><span>
                        {{-- @lang('header.associates')  route('reports.signupcommission') --}}
                        @lang('header.li12')
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('reports.signupcommission') }}">
                    <i class="bi bi-circle"></i><span>
                        {{-- @lang('header.associates') --}}
                        @lang('header.li13')
                    </span>
                </a>
            </li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>
                    @lang('header.report')S
                </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href=" {{ route('performance.index') }} ">
                        <i class="bi bi-circle"></i><span>
                            {{-- @lang('header.referral_comission') --}}
                            @lang('header.li17')
                        </span>
                    </a>
                </li>



                <li>
                        <a href="{{ route('reports.signupcommission') }}">
                <i class="bi bi-circle"></i><span>@lang('header.signup_commission')</span>
                </a>
        </li>
        <li>
            <a href="{{ route('reports.levelIncome') }}">
                <i class="bi bi-circle"></i><span>@lang('header.level_income')</span>
            </a>
        </li>

        <li>
            <a href="{{ route('reports.poolcommission') }}">
                <i class="bi bi-circle"></i><span>@lang('header.pool_commission')</span>
            </a>
        </li>
        <li>
            <a href="{{ route('reports.stakingRewards') }}">
                <i class="bi bi-circle"></i><span>@lang('header.stacking_rewards')</span>
            </a>
        </li>
        <li>
            <a href="{{ route('reports.monthlyCoins') }}">
                <i class="bi bi-circle"></i><span>@lang('header.monthly_coins')</span>
            </a>
        </li>
        <li>
            <a href="{{ route('reports.rankReward') }}">
                <i class="bi bi-circle"></i><span>@lang('header.rank_reward')</span>
            </a>
        </li>
        <li>
            <a href="{{ route('reports.transactions') }}">
                <i class="bi bi-circle"></i><span>@lang('header.transaction')</span>
            </a>
        </li> 
        </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>@lang('header.settings')</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="settings-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="bi bi-circle"></i><span>@lang('header.my_info')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('document.index') }}">
                        <i class="bi bi-circle"></i><span>@lang('header.li18')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.password') }}">
                        <i class="bi bi-circle"></i><span>@lang('header.password')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('supports.supporttickets') }}">
                <i class="bi bi-headset"></i>
                <span> @lang('header.support')</span>
            </a>
        </li>
            <li class="nav-item">

                <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>@lang('header.logout')</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </aside>

    <main id="main" class="main p-0">
    </main>
    @yield('content')
</body>

<script>
    (function() {
        "use strict";
        const select = (el, all = false) => {
            el = el.trim()
            if (all) {
                return [...document.querySelectorAll(el)]
            } else {
                return document.querySelector(el)
            }
        }
        const on = (type, el, listener, all = false) => {
            if (all) {
                select(el, all).forEach(e => e.addEventListener(type, listener))
            } else {
                select(el, all).addEventListener(type, listener)
            }
        }
        const onscroll = (el, listener) => {
            el.addEventListener('scroll', listener)
        }
        if (select('.toggle-sidebar-btn')) {
            on('click', '.toggle-sidebar-btn', function(e) {
                select('body').classList.toggle('toggle-sidebar')
            })
        }
    })();
</script>


</html>
