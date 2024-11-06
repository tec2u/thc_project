@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable({
                !!$countcard!!
            }

        );

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>

<style>
    #pop-div {
        width: 100% !important;
        height: 600px !important;
    }

    @media (min-width: 800px) {
        .geochart {
            width: 17px !important;
        }
    }

    .cardadmimg {
        width: 60px;
    }
</style>

<h1>@lang('admin.dashboard.title')</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @forelse($users as $user)
        <i class="fa fa-user ml-3"></i>
        <div class="alignHeader">
            {{ $user->name }}
        </div>
        @empty
        <p>@lang('admin.dashboard.no_users')</p>
        @endforelse
    </div>
</div>

<div class="row">
    <!-- <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{number_format($commissionSum, 2, ',', '.')}}</h3>
                <p>@lang('admin.dashboard.referral')</p>
            </div>
            <div class="icon">
                <i class="fas fa-credit-card"></i>
            </div>
            <a href="{{ route('admin.reports.levelIncome') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{number_format($poll, 2, ',', '.')}}</h3>
                <p>@lang('admin.dashboard.poll')</p>
            </div>
            <div class="icon">
                <i class="fas fa-receipt"></i>
            </div>
            <a href="{{ route('admin.reports.poolcommission') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ number_format($specialCommision, 2, ',', '.') }}</h3>
                <p> @lang('admin.dashboard.leaders')</p>
            </div>
            <div class="icon">
                <i class="fas fa-project-diagram"></i>
            </div>
            <a href="{{ route('admin.reports.poolcommission') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{$userpay}}</h3>
                <p>@lang('admin.dashboard.PaidUser')</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-check"></i>
            </div>
            <a href="{{ route('admin.users.index') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{number_format($withdrawSum, 2, ',', '.')}}</h3>
                <p>@lang('admin.dashboard.withdra')</p>
            </div>
            <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <a href="{{ route('admin.withdraw.withdrawRequests') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $usersCont }}</h3>
                <p>@lang('admin.dashboard.user_registered')</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('admin.users.index') }}" class="small-box-footer">@lang('admin.btn.moreinfo')<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="card">
    <div id="pop-div" class="geochart"></div>
    <?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>
</div>

<section class="content">

    <div class="card">
        <div class="card-header">
            <div class="alignPackage">
                <h3>@lang('admin.dashboard.purchased.title')</h3>
            </div>
        </div>
        <div class="card-body table-responsive">
            <div class="form-group float-right">
                <input type="text" class="search form-control" placeholder="Search">
            </div>
            <span class="counter float-right"></span>
            <table class="table table-hover table-bordered results">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.dashboard.purchased.col1')</th>
                        <th>@lang('admin.dashboard.purchased.col2')</th>
                        <th>@lang('admin.dashboard.purchased.col3')</th>
                        <th>@lang('admin.dashboard.purchased.col4')</th>
                        <th>@lang('admin.dashboard.purchased.col5')</th>
                    </tr>
                    <tr class="warning no-result">
                        <td colspan="4"><i class="fa fa-primary"></i> @lang('admin.btn.noresults')</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orderpackages as $orderpackage)
                    <tr>
                        <th>{{$orderpackage->id}}</th>
                        <td>{{$orderpackage->user->name}}</td>
                        <td>{{$orderpackage->package_name}}</td>
                        <td>{{number_format($orderpackage->price,2,",",".")}}</td>
                        <td>{{date("d/m/Y h:i:s", strtotime($orderpackage->created_at))}}</td>
                        <td>
                            @if($orderpackage->status == 2)
                            <button class="btn btn-success btn-sm m-0">@lang('admin.btn.canceled')</button>
                            @elseif($orderpackage->status == 1)
                            <button class="btn btn-primary btn-sm m-0">@lang('admin.btn.paid')</button>
                            @else
                            <button class="btn btn-warning btn-sm m-0">@lang('admin.btn.pending')</button>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <p>@lang('admin.dashboard.purchased.empty')</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cards</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        @foreach ($cards as $card)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <img src=" {{asset('storage/'.$card->img)}}" alt="Product Image" class="cardadmimg"> {{$card->name}}
                                <span class="badge bg-primary rounded-pill">{{$card->count}}</span>
                            </li>
                        @endforeach
                    
                    </ul>
                </div>
                <div class="col-md-9">
                    <div id="piechart_3d" style="max-width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
        <div class="card-footer p-0">
        </div>
    </div> -->
</section>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop