@extends('layouts.header')
@section('content')
<style>
    #myChart {
        width: 60%;
        background-color: white !important;
    }
</style>
<main id="main" class="main">
    <section id="poolcommission" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            MONTHLY REPORTS
                            {{-- @lang('reports.pool_commission.title') --}}
                        </h1>
                        <div class="col-12">
                            <p class="text-white responsive-p">You see here your monthly performance reports of your own investment and can also see details when you click on more details.</p>
                        </div>
                        <h3 style='color:#fff'></h3>
                        <div class="col-md-12">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="card shadow my-3">

                            <div class="card-header py-3">
                                <!-- <button type="button" class="btn btn-info btn-sm rounded-pill" style="width: 80px;">CSV</button>
                                                                                                            <button type="button" class="btn btn-success btn-sm rounded-pill" style="width: 80px;">Excel</button>
                                                                                                            <button type="button" class="btn btn-danger btn-sm rounded-pill" style="width: 80px;">PDF</button> -->
                                <div class="card-tools">
                                    <form action="" method="get">

                                        <div class="input-group input-group-sm my-1" style="width: 250px;">
                                            {{-- <input type="year" name="table_search"
                                                    class="form-control form-control-lg" placeholder="@lang('withdraw.search')"> --}}

                                            <select name="table_search" id="ano">';
                                                <option selected disabled>Select a year</option>
                                                @for ($i = 2022; $i <= date('Y'); $i++) <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                            </select>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-dark btn-sm">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Total Bonus Month</th>
                                            <th>Daily Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                        $month = date('m');
                                        @endphp
                                        @if (isset($_GET['table_search']))
                                        @if ($_GET['table_search'] != date('Y'))
                                        @php $month = 12 @endphp
                                        @endif
                                        @endif
                                        @for ($i = 1; $i <= $month; $i++) <tr>
                                            <td>
                                                @php
                                                $month_show = date('F', mktime(0, 0, 0, $i, 1));
                                                $year = isset($_GET['table_search']) ? $_GET['table_search'] : date('Y');
                                                echo $month_show . '/' . $year;
                                                @endphp
                                                @if ($i == date('m'))
                                                <span class="badge badge-success">Current month</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($_GET['table_search']))
                                                {{ $banco->getTotalMonth($i, $_GET['table_search'])->total_sales ?? 0 }}
                                                $ @php $total += $banco->getTotalMonth($i, $_GET['table_search'])->total_sales ?? 0 @endphp
                                                @else
                                                $ {{ $banco->getTotalMonth($i, date('Y'))->total_sales ?? 0 }}
                                                @php $total += $banco->getTotalMonth($i)->total_sales ?? 0 @endphp
                                                @endif

                                            </td>
                                            <td>
                                                @if (isset($_GET['table_search']))
                                                <a href="{{ route('reports.bonusdaily', [$i, $_GET['table_search']]) }}" class="btn btn-sm btn-dark">
                                                    Details
                                                </a>
                                                @else
                                                <a href="{{ route('reports.bonusdaily', [$i, date('Y')]) }}" class="btn btn-sm btn-dark">
                                                    Details
                                                </a>
                                                @endif

                                            </td>
                                            </tr>
                                            @endfor

                                            <tr>
                                                <th colspan="2">
                                                    Total: {{ $total }}
                                                </th>
                                            </tr>

                                    </tbody>

                                </table>
                            </div>
                            {{-- <div class="card-footer clearfix py-3">
                                    {{ $bancos->links() }}
                        </div> --}}
                    </div>
</main>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../../assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Obtenha o elemento canvas
    var ctx = document.getElementById('myChart').getContext('2d');

    // Crie o gráfico
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan 00', 'Jul 00', 'Jan 01', 'Jul 01', 'Jan 02', 'Jul 02', 'Jan 03'],
            datasets: [{
                label: 'Monthly Report',
                data: [261, 255, 283, 286, 290, 260, 263, 267, 270, 282, 289, 250, 222],
                borderColor: '#ffae00',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            backgroundColor: '#fff' // definindo o fundo do gráfico para branco
        }
    });
</script>
@endsection