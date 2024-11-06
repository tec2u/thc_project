@extends('layouts.header')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>


<script>
    $(function() {
        'use strict'
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')
        var salesChartData = {
            labels: {
                !!$label!!
            },
            datasets: [{
                    label: 'Balance Entries',
                    backgroundColor: 'rgba(255,160,25,0.9)',
                    borderColor: 'rgba(255,160,25,0.8)',
                    pointRadius: false,
                    pointColor: '#ffa019',
                    pointStrokeColor: 'rgba(255,160,25,1)',
                    pointHighlightFill: '#ffa019',
                    pointHighlightStroke: 'rgba(255,160,25,1)',
                    data: {
                        !!$data!!
                    }
                },
                {
                    label: 'Balance Out',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: {
                        !!$datasaida!!
                    }
                }
            ]
        }
        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            }
        }
        var salesChart = new Chart(
            salesChartCanvas, {
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            }
        )
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator'],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        $('#world-map-markers').mapael({
            map: {
                name: 'usa_states',
                zoom: {
                    enabled: true,
                    maxLevel: 10
                }
            }
        })
    })

    $(function() {

        $('#carouselEcommerc img:eq(0)').addClass("ativo").show();
        setInterval(slide, 5000);

        function slide() {

            //Se a proxima imagem existir
            if ($('.ativo').next().length) {

                $('.ativo').removeClass("ativo").next().addClass("ativo");

            } else { //Se for a ultima img do carrosel

                $('.ativo').removeClass("ativo");
                $('#carouselEcommerc img:eq(0)').addClass("ativo");

            }

        }
    });
</script>

<script>
    function FunctionCopy1() {

        var copyText = document.getElementById("landing");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }

    function FunctionCopy2() {

        var copyText = document.getElementById("referral");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }
</script>

<style>
    .txtcolor {
        color: #fff;
    }

    .video {
        aspect-ratio: 16 / 9;
        width: 70%;
        display: block;
        margin: 0 auto;
    }

    .img-home {
        max-width: 80%;
    }


    .card_text {
        color: #fff;
    }

    .section-info {
        display: none;
    }

    .testwel {
        position: relative;
        padding-right: 7.5px;
        padding-left: 7.5px;
        margin-right: auto;
        margin-left: auto;
    }

    .icondash {
        width: 100%;
    }

    .foothome {
        max-width: 1550px !important;
    }

    #myChart {
        width: 702px !important;
        height: 347px !important;
        background-color: white !important;
    }

    @media (max-width: 500px) {
        .hhero {
    font-size: 2em;
    line-height: 93%;
    color: rgb(255, 255, 255);
    font-weight: 900;
}
    }

    @media (max-width: 1730px) {
        #myChart {
            width: 590px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1700px) {
        #myChart {
            width: 600px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1522px) {
        #myChart {
            width: 500px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1500px) {
        #myChart {
            width: 462px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1300px) {
        #myChart {
            width: 410px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 867px) {
        #myChart {
            width: 350px !important;
            height: 355px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 768px) {
        #myChart {
            width: 100% !important;
            height: 355px !important;
            background-color: white !important;
        }
    }

    .image {
        flex-basis: 20%;
        padding: 5px;
    }

    .image img {
        max-width: 100%;
        height: auto;
    }

    .container-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;

    }

    .imagehome {
        padding-right: 7.5px;
        padding-left: 7.5px;
        margin-right: auto;
        margin-left: auto;
    }
</style>

<main id="main" class="main mt-0">
    @include('flash::message')
    <section id="home" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                    <div class="col-auto">
                        <h1 class="h3 mb-0 text-white">@lang('home.home1.li1') </h1>
                        <div class="col-12">
                            <p class="text-white responsive-p">@lang('home.home1.li2')</p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mt-" style="backdrop-filter: blur(0px);filter: brightness(120%) grayscale(0%) saturate(120%);" id="herosection">
                <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.5" style="width: 100%;height: 50vh;background: linear-gradient(rgba(0,0,0,0.83), rgba(0,0,0,0.78)), url(&quot;assetsWelcome/images/predioss.jpeg&quot;) center / cover no-repeat;">
                    <div class="container h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-md-12 col-lg-12 col-xl-12 d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                                <div class="text-center" style="margin: 0 auto;">
                                    <p data-aos="fade" data-aos-duration="1500" data-aos-delay="400" data-aos-once="true" class="phero">@lang('home.home1.li3')</p>
                                    <h6 class="text-uppercase fw-bold mb-3 hhero hherosm" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="800" data-aos-once="true">
                                        NEXTGEN<br>INVESTMENT GROUP</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid">

            <div class="row mt-3 align-items-start">
                    <div class="col-xl-3 col-sm-3 mb-xl-0 mb-4 mt-3">
                        <div class="card totalcardb">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10 bi bi-arrow-down-up"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="mb-0 text-capitalize txtcardhome">@lang('home.home1.li4')</p>
                                    <p class="mb-0 txtcardhome">
                                        {{ number_format($total_balance->total_balance, 2, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="txtcardhome">$
                                        {{ $total_withdraw_requests->total_withdraw_requests ?? 0 }}</span><span class="txtcardhome"> @lang('home.home1.li5')</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-3 mb-xl-0 mb-4 mt-3">
                        <div class="card" style="">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10 bi bi-person-plus-fill"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="mb-0 text-capitalize txtcardhome">@lang('home.home1.li6') </p>
                                    <p class="mb-0 txtcardhome">@lang('home.home1.li7')</p>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="txtcardhome"></span><a href=" {{ route('performance.index') }}  " class="txtcardhome linkcor">@lang('home.home1.li8')</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-3 mb-xl-0 mb-4 mt-3">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10 bi bi-trophy-fill"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="mb-0 text-capitalize txtcardhome">@lang('home.home1.li9')</p>
                                    <p class="mb-0 txtcardhome">{{ $value_perc->value_perc ?? 0 }}%</p>

                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                            <p class="mb-0"><span class="txtcardhome"></span><a href=" {{ route('performance.index') }}  " class="txtcardhome linkcor">@lang('home.home1.li8')</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-3 mb-xl-0 mb-4 mt-3">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10 bi bi-star-fill"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="mb-0 text-capitalize txtcardhome">@lang('home.home1.li11')</p>
                                    <p class="mb-0 txtcardhome">
                                        {{ number_format($total_amount->total_amount ?? 0, 2, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="txtcardhome">$
                                        {{ number_format($bonus_day_total->total ?? 0, 2, ',', '.') }} </span> <span class="txtcardhome">
                                        @lang('home.home1.li12')</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="testwel espacoy1">
                <div class="row">
                    <div class="col-md-6  mt-5 mb-5">
                        <div class="embed-responsive embed-responsive-16by9" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                            <video class="video1 embed-responsive-item" controls src="../../assetsWelcome/images/land.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></video>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-info2">
                            <ul class="info-list" style="">
                                <li>@lang('leadpage.new.li1')</li>
                                <li>@lang('leadpage.new.li2')</li>
                                <li>@lang('leadpage.new.li3')</li>
                                <li>@lang('leadpage.new.li4')</li>
                            </ul>
                                <ul class="info-list section-info" style="">
                                    <li>@lang('leadpage.new.li5')</li>
                                    <li>@lang('leadpage.new.li6')</li>
                                    <li>@lang('leadpage.new.li7')</li>
                                    <li>@lang('leadpage.new.li8')</li>
                                    <li>@lang('leadpage.new.li9')</li>
                                    <li>@lang('leadpage.new.li10')
                                    </li>
                                    <li>@lang('leadpage.new.li11')</li>
                                    <li>@lang('leadpage.new.li12')</li>
                                    <li>@lang('leadpage.new.li13')</li>
                                    <li>@lang('leadpage.new.li14')</li>
                                </ul>
                        </div>
                        <button class="login-btn2 col-md-12 text-center" style="border-color: #fff;" id="ler-mais">@lang('leadpage.new.btnli')</button>

                    </div>
                </div>
            </section>
            <div class="container-fluid">
              
                <!-- <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="info-box mb-4 shadow c1">
                                                <span class="info-box-icon"><i class="bi bi-send-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text card_text">@lang('home.landing_page_link')</span>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" id="landing" value="https://phplaravel-938220-3261110.cloudwaysapps.com/indication/2/landing">
                                                                <button class=" btn btn-dark orderbtn linkcopy px-4" type="button" onclick="FunctionCopy1()">Copy</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="info-box mb-4 shadow c1">
                                                <span class="info-box-icon"><i class="bi bi-star-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text card_text">@lang('home.referral_link')</span>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" id="referral" value="https://phplaravel-938220-3261110.cloudwaysapps.com/register">
                                                                <button class=" btn btn-dark orderbtn linkcopy px-4" type="button" onclick=" FunctionCopy2()">Copy</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                <!-- <div class="row mb-3">
                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div style="width: 100%;" id="quotesWidgetChart"></div>
                                            <script async type="text/javascript" data-type="quotes-widget" src="https://c.mql5.com/js/widgets/quotes/widget.js?v=1">
                            {
                                "type": "chart",
                                "filter": "EURGBP",
                                "period": "D1",
                                "width": "100%",
                                "height": 200,
                                "id": "quotesWidgetChart"
                            }
                        </script>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div style="width: 100%;" id="quotesWidgetChart1"></div>
                                            <script async type="text/javascript" data-type="quotes-widget" src="https://c.mql5.com/js/widgets/quotes/widget.js?v=1">
                            {
                                "type": "chart",
                                "filter": "EURJPY",
                                "period": "D1",
                                "width": "100%",
                                "height": 200,
                                "id": "quotesWidgetChart1"
                            }
                        </script>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div style="width: 100%;" id="quotesWidgetChart2"></div>
                                            <script async type="text/javascript" data-type="quotes-widget" src="https://c.mql5.com/js/widgets/quotes/widget.js?v=1">
                            {
                                "type": "chart",
                                "filter": "XAUUSD",
                                "period": "D1",
                                "width": "100%",
                                "height": 200,
                                "id": "quotesWidgetChart2"
                            }
                        </script>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div style="width: 100%;" id="quotesWidgetChart3"></div>
                                            <script async type="text/javascript" data-type="quotes-widget" src="https://c.mql5.com/js/widgets/quotes/widget.js?v=1">
                            {
                                "type": "chart",
                                "filter": "GBPUSD",
                                "period": "D1",
                                "width": "100%",
                                "height": 200,
                                "id": "quotesWidgetChart3"
                            }
                        </script>
                                        </div>
                                    </div> -->




                <div class="card mt-5">
                    <div class="card-header">
                        <p class="txtcardhome">@lang('home.invest.li1')</p>
                    </div>
                    <div class="card-body">
                        <form id="investment-form" action="{{ route('home.calculate') }}" method="POST">
                            <div class="form-row">
                                @csrf
                                <div class="form-group col-md-12 txtcardhome">
                                @lang('home.invest.li2'):<input type="text" name="investment" class="form-control" value="{{ old('investment', 1000001) }}"><br>
                                </div>
                                <div class="form-group col-md-12 txtcardhome">
                                @lang('home.invest.li3'): <input type="text" name="monthly_add" class="form-control" value="{{ old('monthly_add', 0) }}"><br>
                                </div>
                                <div class="form-group col-md-12 txtcardhome">
                                @lang('home.invest.li4'):
                                    <select name="profit" class="form-control">
                                        <option value="2" {{ old('profit', 2) == 2 ? ' selected' : '' }}>2
                                        </option>
                                        <option value="5" {{ old('profit', 5) == 5 ? ' selected' : '' }}>5
                                        </option>
                                        <option value="7" {{ old('profit', 7) == 7 ? ' selected' : '' }}>7
                                        </option>
                                        <option value="9" {{ old('profit', 9) == 9 ? ' selected' : '' }}>9
                                        </option>
                                        <option value="11" {{ old('profit', 11) == 11 ? ' selected' : '' }}>11
                                        </option>

                                    </select>
                                    <br>
                                </div>


                                <p class="mb-5 txtcardhome">@lang('home.invest.li5')
                                    <br>
                                    <br>
                                    $500 - $9999 - 2%
                                    <br>
                                    $10.000 - $100.000 - 5%
                                    <br>
                                    $100.001 - $500.000 - 7%
                                    <br>
                                    $500.000 - $1.000.000 - 9%
                                    <br>
                                    $1.000.001 - $90.000.000- 11%
                                    <br>

                                </p>
                                <input type="hidden" name="show_table" value="y">
                                <button id="btn-exibir-tabela" type="submit" class="btn btn-primary col-md-12">@lang('home.invest.li6')</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div id="tabela" class="table-responsive" style="@if(isset($_POST['show_table'])) display:block @else display:none @endif">
                    @php if(isset($_POST['show_table'])) unset($_POST['show_table']); @endphp
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="tg-0lax"></th>

                                @for ($i = 1; $i <= 10; $i++) <th>Year {{ $i }}</th>
                                    @endfor
                            </tr>
                        </thead>
                        <tbody>
                            @php $data_graphic = []; @endphp
                            @for ($i = 1; $i <= 12; $i++) <tr>
                                <td>
                                    @php
                                    $date = DateTime::createFromFormat('!m', $i);
                                    echo $date->format('M');
                                    @endphp
                                </td>
                                @for ($j = 1; $j <= 10; $j++) <td>
                                    {{ $table[$j][$i] }}
                                    @if ($i == 12)
                                    @php $data_graphic[] = (float) preg_replace("/[^0-9]/", "",$table[$j][$i]); @endphp
                                    @endif
                                    </td>
                                    @endfor
                                    </tr>
                                    @endfor
                        </tbody>
                    </table>
                    <canvas id="line-chart" height="100" class="mb-5"></canvas>

                    <section class="espacoy6 bg-dark">
                        <!-- Start: 1 Row 2 Columns -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-white mb-3">@lang('home.invest.li7')</h5>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center mt-4">
                                        <div>
                                            <h5 class="text-white" class="text-center text-white">@lang('home.invest.li8')
                                            </h5>
                                            <p class="text-white-80" style="font-size: 13px;">
                                            @lang('home.invest.li9')
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center mt-3">
                                        <div>
                                            <h5 class="text-white" class="text-center text-white">@lang('home.invest.li10')</h5>
                                            <p class="text-white-80" style="font-size: 13px;">
                                            @lang('home.invest.li11')
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center mt-3">
                                        <div>
                                            <h5 class="text-white" class="text-center text-white">@lang('home.invest.li12')</h5>
                                            <p class="text-white-80" style="font-size: 13px;">
                                            @lang('home.invest.li13')
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center mt-3">
                                        <div>
                                            <h5 class="text-white" class="text-center text-white">@lang('home.invest.li14'): </h5>
                                            <p class="text-white-80" style="font-size: 13px;">
                                                +971 (0) 585221677, CONTACT@NIG-DUBAI.COM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img class="w-70 d-block" src="assetsWelcome/images/nigcoin.png" alt="Slide Image">
                                    </div>
                                </div>
                                <div class="col-md-4 justify-content-center mt-5 mb-5">
                                    <h4 class="text-white">@lang('home.invest.li15')
                                    </h4>
                                    <div class="login-btn-wrapper2 mt-5">
                                        <a href="https://www.infinityclubcards.com/indication/2/landing" class="login-btn3 text-center">@lang('home.invest.li16')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="espacoy6 bg-dark mt-2">
                        <!-- Start: 1 Row 2 Columns -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="text-center text-white-50">THE INFINITY CLUB CARD</h6>
                                    <h3 class="text-center text-white fw-bold" style="margin-bottom: 32px; ">
                                        @lang('leadpage.home.onecard')
                                        <br>@lang('leadpage.home.pay')
                                    </h3>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="2000" data-aos-once="true" style="color: rgb(188,188,188);">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                                </path>
                                            </svg></div>
                                        <div>
                                            <h5 class="text-white" class="text-center text-white">@lang('leadpage.home.card')
                                            </h5>
                                            <p class="text-white-50" style="font-size: 13px;">@lang('leadpage.home.cardtxt')
                                                <br>@lang('leadpage.home.cardtxt2')
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary text-dark d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="2300" data-aos-delay="400" data-aos-once="true" style="color: rgb(188,188,188);">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                                </path>
                                            </svg></div>
                                        <div>
                                            <h5 class="text-white">@lang('leadpage.home.features')</h5>
                                            <p class="text-white-50" style="font-size: 13px;">@lang('leadpage.home.featurestxt') </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="3000" data-aos-delay="800" data-aos-once="true" style="color: rgb(188,188,188);">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                                                </path>
                                            </svg></div>
                                        <div>
                                            <h5 class="text-white">@lang('leadpage.home.success')</h5>
                                            <p class="text-white-50" style="font-size: 13px;">@lang('leadpage.home.successtxt')
                                                <br>@lang('leadpage.home.successtxt2')
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-keyboard="false" id="carousel-1">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active"><img class="w-100 d-block" src="assetsWelcome/images/carddiamondngold.png?h=12b29874753f1b481ae1d8096dcd8409" alt="Slide Image"></div>
                                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardclassicmember.png?h=12b29874753f1b481ae1d8096dcd8409" alt="Slide Image"></div>
                                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardplatinumbemer.png?h=7eb2b3bbff64205c2f47993625933a9d" alt="Slide Image"></div>
                                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardplatinumelitemember.png?h=2265dd8de7d13a29d921c59d102bcb06" alt="Slide Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 justify-content-center mt-5 mb-5">
                                    <h4 class="text-white">@lang('home.invest.li17')</h4>
                                    <div class="login-btn-wrapper2 mt-5">
                                        <a href="https://www.infinityclubcards.com/indication/2/landing" class="login-btn3 text-center">@lang('home.invest.li18')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container-fluid imagehome mt-5">
                <div class="text-center">
                    <h2 class="text-dark mb-4 mt-4 about-txt">@lang('leadpage.client.li1')</h2>
                </div>
                <div class="container-img">
                    <div class="image">
                        <img src="../../assetsWelcome/images/gibson.jpg">
                    </div>
                    <div class="image">
                        <img src="../../assetsWelcome/images/brinkley.jpg">
                    </div>
                    <div class="image">
                        <img src="../../assetsWelcome/images/douglas.jpg">
                    </div>
                    <div class="image">
                        <img src="../../assetsWelcome/images/sheik.jpg">
                    </div>
                    <div class="image">
                        <img src="../../assetsWelcome/images/wozniak.jpg">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h2 class="text-dark mb-4 mt-5 about-txt">@lang('leadpage.client.li2')</h2>
            </div>
            <!-- <div class="galeria">
                        <img src="../../assetsWelcome/images/accenture.png">
                        <img src="../../assetsWelcome/images/bbc.png">
                        <img src="../../assetsWelcome/images/cw.png">
                        <img src="../../assetsWelcome/images/forbes.png">
                        <img src="../../assetsWelcome/images/gilette.png">
                        <img src="../../assetsWelcome/images/heinecken.png">
                        <img src="../../assetsWelcome/images/loreal.png">
                        <img src="../../assetsWelcome/images/nbc.png">
                        <img src="../../assetsWelcome/images/pg.png">
                        <img src="../../assetsWelcome/images/philips.png">
                        <img src="../../assetsWelcome/images/reckitt.png">
                        <img src="../../assetsWelcome/images/redner.png">
                        <img src="../../assetsWelcome/images/sp_excellence.png">
                        <img src="../../assetsWelcome/images/top100.png">
                    </div> -->
        </div>
        <div class="container-img imagehome">
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/accenture.png" alt="Imagem 1">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/bbc.png" alt="Imagem 2">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/cw.png" alt="Imagem 3">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/forbes.png" alt="Imagem 4">
            </div>
        </div>
        <div class="container-img imagehome">
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/nbc.png" alt="Imagem 5">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/redner.png" alt="Imagem 3">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/sp_excellence.png" alt="Imagem 4">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/top100.png" alt="Imagem 5">
            </div>
        </div>
        <section class="espacoy1 testwel mt-5">
            <div class="container-fluid">
                <div class="row g-2">
                    <h2 class="text-dark mb-5 about-txt">@lang('leadpage.test.li1')</h2>
                    <div class="col-md-4">
                        <div class="ratings text-center ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Martin Becker</h5>
                        <div class="card p-3 px-4">
                            <div class="user-content">
                                <p>@lang('leadpage.test.li3')
                                    <br>@lang('leadpage.test.li4').<br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ratings text-center ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Christian Stückl</h5>
                        <div class="card p-3 px-4">
                            <div class="user-content">
                                <p>@lang('leadpage.test.li5')<br><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ratings text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Sandra Schneider</h5>
                        <div class="card p-3 px-4">
                            <div class="user-content">
                                <p>@lang('leadpage.test.li6')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login-btn-wrapper mt-5">
                    <a href="{{ route('register') }}" class="login-btn2">@lang('leadpage.why.li5')</a>
                </div>
            </div>
        </section>
        <!--<div class="col-12">
                                            <div id="carouselEcommerc" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">

                                                <div class="carousel-inner">
                                                    @foreach ($packages as $package)
    <div style="display:none"> {{ $existe = 1 }} </div>
                                                    <div class="carousel-item @if ($loop->index == 0) active @endif">
                                                        <div class="h-100">
                                                            <div class="row d-flex justify-content-center align-items-center h-100">
                                                                <div class="col col-lg-12 mb-4 mb-lg-0">
                                                                    <div class="card mb-3" style="border-radius: .5rem;">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-6 gradient-custom text-center text-white">
                                                                                <img src="{{ asset('storage/' . $package->package->img) }}" alt="" class="img-fluid mt-5" style="width: 50%" />
                                                                                {{-- <h5>Marie Horwitz</h5>
                                                                <p>Web Designer</p>
                                                                <i class="far fa-edit mb-5"></i> --}}
                                                                            </div>
                                                                            <div class="text-center col-md-6 mt-0 txtcolor" style="background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(28, 28, 28));">
                                                                                <div class="card-body p-4">
                                                                                    <h3>@lang('home.info')</h3>
                                                                                    <hr class="mt-0 mb-4">
                                                                                    <div class="row pt-1">
                                                                                        <div class="col-6 mb-3">
                                                                                            <h6>@lang('home.name_card')</h6>
                                                                                            <p class="text-muted">
                                                                                                {{ $package->package->name }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-6 mb-3">
                                                                                            <h6>@lang('home.kyc')</h6>
                                                                                            <p class="text-muted">@lang('home.pending')</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row pt-1">
                                                                                        <div class="col-6 mb-3">
                                                                                            <h6>@lang('home.value')</h6>
                                                                                            <p class="text-muted">$
                                                                                                {{ number_format($package->price, 2, ',', '.') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-6 mb-3">
                                                                                            <h6>@lang('home.acquisition_date')</h6>
                                                                                            <p class="text-muted">
                                                                                                {{ date('d/m/Y', strtotime($package->created_at)) }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    @endforeach
                                                </div>
                                                @if (!empty($existe))
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEcommerc" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">@lang('home.previous')</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselEcommerc" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">@lang('home.next')</span>
                                                </button>
    @endif

                                            </div>

                                        </div> -->

        @if (auth()->user()->isAllowed())
        <!-- <div class="col-12 col-sm-6 col-md-6">
                                                                        <div class="info-box mb-4 shadow elevation c1">
                                                                            <span class="info-box-icon">
                                                                                <i class="bi bi-people-fill"></i>
                                                                            </span>

                                                                            <div class="info-box-content">
                                                                                <span class="info-box-text">@lang('home.people_for_next_levels')</span>
                                                                                <span class="info-box-number">150</span>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width: 70%; background-color: #111111;"></div>
                                                                                </div>
                                                                                <span class="progress-description">
                                                                                    70% @lang('home.people_next_levels_in') 200
                                                                                </span>
                                                                            </div>

                                                                        </div>
                                                                    </div> -->

        <!-- <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow c1">
                                                <span class="info-box-icon"><i class="bi bi-arrow-down-up"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.bonus_referral')</span>
                                                    <span class="info-box-number">{{ number_format($user->getTotalBancoIndicacaoDirectIndirect(), 2, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow c1">
                                                <span class="info-box-icon"><i class="bi bi-trophy-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.score_poll')</span>
                                                    <span class="info-box-number">{{ $user->getPoll($user->id) }}</span>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow c1">
                                                <span class="info-box-icon"><i class="bi bi-star-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.pool_commission')</span>
                                                    <span class="info-box-number">{{ number_format($user->getTotalBancoPool(), 2, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow elevation c1">
                                                <span class="info-box-icon "><i class="bi bi-credit-card-2-back-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.cardactive_details')</span>
                                                    <span class="info-box-number">{{ $user->getCards($user->id) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow elevation c1">
                                                <span class="info-box-icon "><i class="bi bi-reception-4"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.redetotal_details')</span>
                                                    <span class="info-box-number">{{ $user->getRede($user->id) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow elevation c1">
                                                <span class="info-box-icon "><i class="bi bi-person-plus-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.active_referrals')</span>
                                                    <span class="info-box-number">{{ $user->getRedePackages($user->id) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow elevation c1">
                                                <span class="info-box-icon "><i class="bi bi-person-plus-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('network.PreRegistration')</span>
                                                    <span class="info-box-number">{{ $user->getRedeAdessao($user->id) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-4 shadow elevation c1">
                            <span class="info-box-icon "><i class="bi bi-display"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">@lang('home.landing_details')</span>
                                <span class="info-box-number">Active</span>
                            </div>
                        </div>
                    </div> --}}

                                        <div class="col-12 col-sm-6 col-md-3">
                                            <div class="info-box mb-4 shadow elevation c1">
                                                <span class="info-box-icon "><i class="bi bi-person-fill"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">@lang('home.user_details')</span>
                                                    @if ($user->getTypeActivated($user->id) == 'AllCards')
    <span class="info-box-number">@lang('network.active')</span>
@elseif ($user->getTypeActivated($user->id) == 'PreRegistration')
    <span class="info-box-number">@lang('network.PreRegistration')</span>
@else
    <span class="info-box-number">@lang('network.inactive')</span>
    @endif
                                                </div>
                                            </div>
                                        </div>
    @endif


                                        {{-- <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-4 shadow c1 btcolor3">
                            <div class="info-box-content">
                                <span class="info-box-text">@lang('home.current_package')</span>
                                <span class="info-box-number">{{$name}}</span>
                </div> -->
        </div>
        </div> --}}

        <!-- <div class="clearfix hidden-md-up"></div> -->
        {{-- <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-4 shadow c1 btcolor1">
                            <div class="info-box-content col-8">
                                <span class="info-box-text">@lang('home.current_rank')</span>
                                <span class="info-box-number">{{$carrer->name}}</span>
        </div>
        <div class="info-box-content col-4">
            <img src="{{asset('storage/pin/'.$carrer->pin)}}" alt="pin" class="rounded-circle">
        </div>
        </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-4 shadow c1 btcolor2">
                <div class="info-box-content">
                    <span class="info-box-text">@lang('home.membership_status')</span>
                    @if ($user->activated == 1)
                    <span class="info-box-number">@lang('home.active')</span>
                    @else
                    <span class="info-box-number">@lang('home.disabled')</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-4 shadow c1 btcolor4">
                <div class="info-box-content">
                    <span class="info-box-text">@lang('home.inactive_users')</span>
                    @if ($inactiverights > 0)
                    <span class="info-box-number text-danger">{{$inactiverights}}</span>
                    @else
                    <span class="info-box-number">{{$inactiverights}}</span>
                    @endif
                </div>
            </div>
        </div>
        </div> --}}



        <!-- <div class="row mb-3">
                                                            <div class="card shadow my-3">
                                                                <div class="card-header bbcolorp">
                                                                    <h3 class="card-title"> @lang('home.latest_orders')</h3>
                                                                </div>
                                                                <div class="card-body table-responsive p-0">
                                                                    <table class="table table-hover text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>@lang('home.name')</th>
                                                                                <th>@lang('home.img')</th>
                                                                                <th>@lang('home.product_price')</th>
                                                                                {{-- <th>@lang('home.daily_return')</th>
                                        <th>@lang('home.yearly_return_coin')</th>
                                        <th>@lang('home.total_return_coin')</th>
                                        <th>@lang('home.steaking_period')</th>
                                        <th>@lang('home.capping_coin')</th>
                                        <th>@lang('home.expected_total_return')</th> --}}
                                                                                <th>@lang('home.date')</th>
                                                                                <th>@lang('home.payment_status')</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @forelse($orderpackages as $orderpackage)
    <tr>
                                                                                <th>{{ $orderpackage->package->name }}</th>
                                                                                <td class="tdimg">
                                                                                    <img style="max-width: 100px" src="{{ asset('storage/' . $orderpackage->package->img) }}" />
                                                                                </td>
                                                                                <td>$ {{ $orderpackage->price }}</td>
                                                                                {{-- <td>{{$orderpackage->package->daily_returns}}</td>
                                <td>{{$orderpackage->package->yaerly_returns}}</td>
                                <td>{{$orderpackage->package->total_returns}}</td>
                                <td>{{$orderpackage->package->period_days}} Months</td>
                                <td>{{$orderpackage->package->capping_coin}}</td>
                                <td>{{number_format($orderpackage->package->packageTotal($orderpackage->package->id),2, ',', '.')}} </td> --}}
                                                                                <td>{{ date('d/m/Y', strtotime($orderpackage->created_at)) }}</td>
                                                                                <td>
                                                                                    @if ($orderpackage->payment_status == 1)
    <span class="rounded-pill bg-success px-4 py-1">@lang('home.paid')</span>
@elseif($orderpackage->payment_status == 2)
    <span class="rounded-pill bg-warning px-4 py-1">@lang('home.cancelled')</button>
@else
    <span class="rounded-pill bg-primary px-4 py-1">@lang('home.waiting')</span>
    @endif
                                                                                </td>
                                                                            </tr>
                            @empty
                                                                            <p>@lang('home.you_dont_have_any_packages_registered')</p>
    @endforelse
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div> -->
        <div class="container-fluid">


        </div>
        {{-- <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title">@lang('home.movement_in_the_last_30_days')</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">@lang('home.action')</a>
                                            <a href="#" class="dropdown-item">@lang('home.another_action')</a>
                                            <a href="#" class="dropdown-item">@lang('home.something_else_here')</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">@lang('home.separated_link')</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>@lang('home.sales'): {{date('j M, Y', strtotime("-30 days",strtotime(date('d/m/Y'))))}} - {{date('j M, Y')}}</strong>
        </p>
        <div class="chart">
            <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                </div>
                <canvas id="salesChart" height="180" style="height: 180px; display: block; width: 581px;" width="581" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
        </div>

        </div>

        <div class="card-footer">
            <div class="row mb-3">
                <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i></span>
                        <h5 class="description-header">{{number_format($totalbanco, 2, ',', '.')}} </h5>
                        <span class="description-text">@lang('home.total_bonuses')</span>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i></span>
                        <h5 class="description-header">{{number_format($pontos, 2, ',', '.')}} </h5>
                        <span class="description-text">@lang('home.total_volume')</span>
                    </div>

                </div>

                <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i></span>
                        <h5 class="description-header">{{number_format($bonusdaily, 2, ',', '.')}} </h5>
                        <span class="description-text">@lang('home.daily_comissions')</span>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="description-block">
                        <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i></span>
                        <h5 class="description-header">{{number_format(abs($saque), 2, ',', '.')}} </h5>
                        <span class="description-text">@lang('home.total_withdrawal')</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div> --}}

        <!-- <div class="row mb-3">
                                                                <div class="col-md-8">
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-6">

                                                                            <div class="card direct-chat direct-chat-warning shadow">
                                                                                <div class="card-header">
                                                                                    <h3 class="card-title">Direct Chat</h3>
                                                                                    <div class="card-tools">
                                                                                        <span title="3 New Messages" class="badge badge-warning">3</span>
                                                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                                                                            <i class="fas fa-comments"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                                                            <i class="fas fa-times"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-body">

                                                                                    <div class="direct-chat-messages">

                                                                                        <div class="direct-chat-msg">
                                                                                            <div class="direct-chat-infos clearfix">
                                                                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                                                                            </div>

                                                                                            <img class="direct-chat-img" src="../images/logo-removebg-preview.png" alt="message user image">

                                                                                            <div class="direct-chat-text">
                                                                                                Is this template really for free? That's unbelievable!
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="direct-chat-msg right">
                                                                                            <div class="direct-chat-infos clearfix">
                                                                                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                                                            </div>
                                                                                            <img class="direct-chat-img" src="../images/logo-removebg-preview.png" alt="message user image">
                                                                                            <div class="direct-chat-text">
                                                                                                You better believe it!
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="direct-chat-msg">
                                                                                            <div class="direct-chat-infos clearfix">
                                                                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                                                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                                                                            </div>
                                                                                            <img class="direct-chat-img" src="../images/logo-removebg-preview.png" alt="message user image">
                                                                                            <div class="direct-chat-text">
                                                                                                Working with AdminLTE on a great new app! Wanna join?
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="direct-chat-msg right">
                                                                                            <div class="direct-chat-infos clearfix">
                                                                                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                                                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                                                                            </div>
                                                                                            <img class="direct-chat-img" src="../images/logo-removebg-preview.png" alt="message user image">
                                                                                            <div class="direct-chat-text">
                                                                                                I would love to.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="direct-chat-contacts">
                                                                                        <ul class="contacts-list">
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            Count Dracula
                                                                                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            Sarah Doe
                                                                                                            <small class="contacts-list-date float-right">2/23/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">I will be waiting for...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            Nadia Jolie
                                                                                                            <small class="contacts-list-date float-right">2/20/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">I'll call you back at...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            Nora S. Vans
                                                                                                            <small class="contacts-list-date float-right">2/10/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">Where is your new...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            John K.
                                                                                                            <small class="contacts-list-date float-right">1/27/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">Can I take a look at...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#">
                                                                                                    <img class="contacts-list-img" src="../images/logo-removebg-preview.png" alt="User Avatar">
                                                                                                    <div class="contacts-list-info">
                                                                                                        <span class="contacts-list-name">
                                                                                                            Kenneth M.
                                                                                                            <small class="contacts-list-date float-right">1/4/2015</small>
                                                                                                        </span>
                                                                                                        <span class="contacts-list-msg">Never mind I found...</span>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-footer">
                                                                                    <form action="#" method="post">
                                                                                        <div class="input-group">
                                                                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                                                                            <span class="input-group-append">
                                                                                                <button type="button" class="btn btn-warning">Send</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="card shadow">
                                                                                <div class="card-header">
                                                                                    <h3 class="card-title">Latest Joining</h3>
                                                                                    <div class="card-tools">
                                                                                        <span class="badge badge-danger">8 New Members</span>
                                                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                                                            <i class="fas fa-times"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-body p-0">
                                                                                    <ul class="users-list clearfix">
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Alexander Pierce</a>
                                                                                            <span class="users-list-date">Today</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Norman</a>
                                                                                            <span class="users-list-date">Yesterday</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="d../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Jane</a>
                                                                                            <span class="users-list-date">12 Jan</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">John</a>
                                                                                            <span class="users-list-date">12 Jan</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Alexander</a>
                                                                                            <span class="users-list-date">13 Jan</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Sarah</a>
                                                                                            <span class="users-list-date">14 Jan</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Nora</a>
                                                                                            <span class="users-list-date">15 Jan</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="../images/logo-removebg-preview.png" alt="User Image">
                                                                                            <a class="users-list-name" href="#">Nadia</a>
                                                                                            <span class="users-list-date">15 Jan</span>
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>

                                                                                <div class="card-footer text-center">
                                                                                    <a href="javascript:">View All Users</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card shadow">
                                                                        <div class="card-header border-transparent">
                                                                            <h3 class="card-title">Latest Orders</h3>
                                                                            <div class="card-tools">
                                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card-body p-0">
                                                                            <div class="table-responsive">
                                                                                <table class="table m-0">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order ID</th>
                                                                                            <th>Item</th>
                                                                                            <th>Status</th>
                                                                                            <th>Popularity</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                                                            <td>Junior Pkg</td>
                                                                                            <td><span class="badge badge-success">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                                                            <td>Master Pkg</td>
                                                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>Master Pkg</td>
                                                                                            <td><span class="badge badge-danger">Processing</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>Senior Pkg</td>
                                                                                            <td><span class="badge badge-info">Processing</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                                                            <td>Senior Pkg</td>
                                                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>Master Pkg</td>
                                                                                            <td><span class="badge badge-danger">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card-footer clearfix">
                                                                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                                                                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="info-box mb-3 shadow elevation-3 boxinfo">
                                                                        <span class="info-box-icon"><i class="bi bi-list-columns-reverse"></i></span>
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Inventory</span>
                                                                            <span class="info-box-number">5,200</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="info-box mb-3 shadow boxinfo">
                                                                        <span class="info-box-icon"><i class="bi bi-chat-left-fill"></i></span>
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mentions</span>
                                                                            <span class="info-box-number">92,050</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="info-box mb-3 shadow boxinfo">
                                                                        <span class="info-box-icon"><i class="bi bi-box-fill"></i></span>
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Downloads</span>
                                                                            <span class="info-box-number">114,381</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="info-box mb-3 shadow boxinfo">
                                                                        <span class="info-box-icon"><i class="bi bi-send-fill"></i></span>
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Direct Messages</span>
                                                                            <span class="info-box-number">163,921</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="card shadow">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">Recently Added Products</h3>
                                                                            <div class="card-tools">
                                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card-body p-0">
                                                                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                                                                <li class="item">
                                                                                    <div class="product-img">
                                                                                        <img src="../images/logo-removebg-preview.png" alt="Product Image" class="img-size-50">
                                                                                    </div>
                                                                                    <div class="product-info">
                                                                                        <a href="javascript:void(0)" class="product-title">Junior Pkg
                                                                                            <span class="badge badge-warning float-right">$1800</span></a>
                                                                                        <span class="product-description">
                                                                                            Descricao.
                                                                                        </span>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <div class="product-img">
                                                                                        <img src="../images/logo-removebg-preview.png" alt="Product Image" class="img-size-50">
                                                                                    </div>
                                                                                    <div class="product-info">
                                                                                        <a href="javascript:void(0)" class="product-title">Starter Pkg
                                                                                            <span class="badge badge-info float-right">$700</span></a>
                                                                                        <span class="product-description">
                                                                                            Descricao.
                                                                                        </span>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <div class="product-img">
                                                                                        <img src="../images/logo-removebg-preview.png" alt="Product Image" class="img-size-50">
                                                                                    </div>
                                                                                    <div class="product-info">
                                                                                        <a href="javascript:void(0)" class="product-title">
                                                                                            Senior Pkg <span class="badge badge-danger float-right">
                                                                                                $350
                                                                                            </span>
                                                                                        </a>
                                                                                        <span class="product-description">
                                                                                            Descricao.
                                                                                        </span>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="item">
                                                                                    <div class="product-img">
                                                                                        <img src="../images/logo-removebg-preview.png" alt="Product Image" class="img-size-50">
                                                                                    </div>
                                                                                    <div class="product-info">
                                                                                        <a href="javascript:void(0)" class="product-title">Master Pkg
                                                                                            <span class="badge badge-success float-right">$399</span></a>
                                                                                        <span class="product-description">
                                                                                            Descricao.
                                                                                        </span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="card-footer text-center">
                                                                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div> -->


        </div>
        </div>
    </section>
    <footer class="bg-dark">
        <div class="espacoy6">
            <!-- Start: 1 Row 1 Column -->
            <div class="container foothome">
                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <img src="../../assetsWelcome/images/NIG.png" width="100%" style="max-width: 300px;">
                        <p class="text-center text-white"></p>
                        <div class="d-flex align-items-lg-center text-white mb-2"><a class="d-block footerlink" href="#" data-bs-target="#" data-bs-toggle="modal">@lang('leadpage.footer1.li1')</a></div>
                        <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" style="font-size: 13px;" href="https://phpstack-938220-3402762.cloudwaysapps.com/disclaimer-2/">@lang('leadpage.footer1.li2')</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-lg-2">
                            <h5 class="text-start text-white mt-3">Additional Pages</h5>
                            <div class="d-flex flex-wrap">
                                <div class="my-div d-inline-block align-items-lg-center mb-3 mt-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com">Home</a>
                                </div>
                                <div class="my-div d-inline-block align-items-lg-center mb-3 mt-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com/asset-acceleration/">Assets</a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="my-div d-inline-block align-items-lg-center mb-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com/works/academy/">Academy</a>
                                </div>
                                <div class="my-div d-inline-block align-items-lg-center mb-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com/blog/">Insights</a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="my-div d-inline-block align-items-lg-center mb-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com/contact-us/">Contact</a>
                                </div>
                                <div class="my-div d-inline-block align-items-lg-center mb-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="https://phpstack-938220-3402762.cloudwaysapps.com/testimonials-1/">Testimonials</a>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="my-div d-inline-block align-items-lg-center mb-3"><a
                                        class="d-block footerlink" style="font-size: 13px;"
                                        href="http://phplaravel-938220-3261110.cloudwaysapps.com">Login</a>
                                </div>
                            </div>
                            <h5 class="text-start text-white"></h5>
                            <h5 class="text-start text-white"></h5>
                        </div> -->
                    <div class="col-md-3 mx-auto">
                        <p class="text-center text-white"></p>
                        <h5 class="text-start text-white mb-4">@lang('leadpage.footer1.li4')</h5>
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flaguk.png?h=0c7390cbfbfc9edfeaa340414b8fcccf" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/en">@lang('leadpage.btn.english')</a></div>
                        <!-- <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagspa.png?h=82b1ec4cf037271f6fac3cb3a83072e5" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/es">@lang('leadpage.btn.spanish')</a></div> -->
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagger.png?h=4e906449aca319bcf7fed73fb806e14f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/de">@lang('leadpage.btn.german')</a></div>
                        <!-- <div class="d-flex align-items-lg-center"><img class="me-2" src="../../assetsWelcome/images/flagfr.png?h=af5123cb6532b4278a2cdb445e0a130f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/fr">@lang('leadpage.btn.french')</a></div> -->
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-row align-items-center">
                            <img src="../../assetsWelcome/images/nicol.jpg" alt="Descrição da imagem" style="border-radius: 50%; width: 13%; height: 45px;">
                            <p class="text-white ms-3 mb-0">@nig.dubai</p>
                        </div>
                        <a href="https://www.instagram.com/nig.dubai4u/?igshid=ZDdkNTZiNTM%3D">
                            <button class="btn btn-info btn-block mt-3">@lang('leadpage.footer1.li3')</button>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="social-media mt-5 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="left text-white">
                        <p style="font-size: 10px;">@lang('leadpage.footer.copyright')
                            by NEXTGEN Investment Group. All rights reserved</p>
                    </div>
                    <div class="right">
                        <ul class="d-flex flex-wrap">
                            <li><a href="https://www.facebook.com/profile.php?id=100090615963588&mibextid=ZbWKwL"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="https://twitter.com/nigdubai?t=160-ONDdkxFBeQks_QYUOQ&s=09"><i class="fab fa-twitter twitter-icon"></i></a></li>
                            <li><a href="https://www.instagram.com/nig.dubai4u/?igshid=ZDdkNTZiNTM%3D"><i class="fab fa-instagram ig-icon"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/nig-dubai.com/"><i class="fab fa-linkedin-in linkedin-icon"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=971585221677&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp wa-icon"></i></a></li>
                            <li><a href="https://www.tiktok.com/@nigdubai"><i class="fab fa-tiktok tiktok-icon"></i></a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <!-- End: 1 Row 1 Column -->
        </div>
    </footer>
</main>


<!-- <script>
        if (screen.width > 810) {
            var widthImage = 810;
            var heightImage = widthImage / 1.787;
        } else {
            var widthImage = screen.width;
            var heightImage = screen.width / 1.787;
        }
        setTimeout(() => {
            Swal.fire({
                "title": "",
                "text": "",
                "width": widthImage,
                "heightAuto": true,
                "padding": "1.25rem",
                "showConfirmButton": true,
                "showCloseButton": false,
                "timerProgressBar": false,
                "customClass": {
                    "container": null,
                    "popup": null,
                    "header": null,
                    "title": null,
                    "closeButton": null,
                    "icon": null,
                    "image": null,
                    "content": null,
                    "input": null,
                    "actions": null,
                    "confirmButton": null,
                    "cancelButton": null,
                    "footer": null
                },
                "imageUrl": "{{ $url_image_popup }}",
                "imageWidth": widthImage,
                "imageHeight": heightImage,
                "imageAlt": "",
                "animation": false
            });
        }, 7000);
    </script> -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../../assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var button = document.getElementById("ler-mais");
  var sectionInfo = document.querySelector(".section-info");
  var isOpen = false;

  button.addEventListener("click", function() {
    if (!isOpen) {
      sectionInfo.style.display = "block";
      button.innerHTML = "READ LESS";
      isOpen = true;
    } else {
      sectionInfo.style.display = "none";
      button.innerHTML = "READ MORE";
      isOpen = false;
    }
  });
</script>
<script>
    $('.galeria').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script>
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script>
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
                labels: ['Year 1', 'Year 2', 'Year 3', 'Year 4', 'Year 5', 'Year 6', 'Year 7', 'Year 8', 'Year 9',
                    'Year 10'
                ],
                datasets: [{
                    data: {{json_encode($data_graphic)}},
                    label: "Money",
                    borderColor: "#3e95cd",
                    fill: false
                }, ]
            },
        });
</script>


@endsection