@extends('layouts.header')
@section('content')
<main id="main" class="main">
    @include('flash::message')
    <section id="produtos" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>E-Wallet</h1>
                        <div class="col-12">
                            <p class="text-white responsive-p">@lang('purchase.wallet.li1')</p>
                        </div>
                        <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title">E-Wallet @lang('purchase.wallet.li2')</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        @forelse($packages as $package)
                        <div class="col-sm-4 card-deck hover ">
                            <div class="card ">
                                <img src="{{ asset('storage/' . $package->img) }}" class="card-img-top" alt="...">
                                <h5 class="card-title">{{ $package->name }}</h5>

                                <h6 class="card-body">{!! $package->long_description !!}</h6>
                                {{-- <div class="d-flex shadow-sm cardlist">
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item pk">@lang('package.product_price')</li>
                                <li class="list-group-item pk">@lang('package.daily_return')</li>
                                <li class="list-group-item pk">@lang('package.yearly_return_coin')</li>
                                <li class="list-group-item pk">@lang('package.total_return_coin')</li>
                                <li class="list-group-item pk">@lang('package.steaking_period')</li>
                                <li class="list-group-item pk">@lang('package.capping_coin')</li>
                                <li class="list-group-item pk">@lang('package.expected_total_return')</li>
                                </ul>
                                <ul class="list-group list-group-flush text-end">
                                <li class="list-group-item pk"> $ {{$package->price}}</li>
                                <li class="list-group-item pk">{{$package->daily_returns}}</li>
                                <li class="list-group-item pk">{{$package->yaerly_returns}}</li>
                                <li class="list-group-item pk">{{$package->total_returns}}</li>
                                <li class="list-group-item pk">{{$package->period_days}} @lang('package.months')</li>
                                <li class="list-group-item pk">{{$package->capping_coin}}</li>
                                <li class="list-group-item pk">{{number_format($package->packageTotal($package->id),2, ',', '.')}} / @lang('package.month')</li>
                                </ul>
                            </div> --}}
                            <div class="card-body">
                                {{-- @if ($user->contact_id == null)
                                                <a href="{{ route('packages.detail', ['id' => $package->id]) }}"
                                class="btn btn-primary m-4 rounded-pill disabled"> @lang('package.details')
                                </a>
                                @else --}}
                                <a href="{{ route('packages.detail', ['id' => $package->id]) }}" class="btn btn-primary m-4 rounded-pill"> @lang('package.details')</a>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    </div>
                    @empty
                    <p>@lang('package.any_products_registered')</p>
                    @endforelse

                </div>
                <div class="card-footer clearfix py-3">
                    {{ $packages->links() }}
                </div>
                <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title">@lang('purchase.wallet.li3')</h3>
                            </div>
                            <div class="card-header py-3">
                                <!-- <button type="button" class="btn btn-info btn-sm rounded-pill" style="width: 80px;">CSV</button>
                            <button type="button" class="btn btn-success btn-sm rounded-pill" style="width: 80px;">Excel</button>
                            <button type="button" class="btn btn-danger btn-sm rounded-pill" style="width: 80px;">PDF</button> -->
                                <div class="card-tools">
                                    <div class="input-group input-group-sm my-1" style="width: 250px;">
                                        <input type="text" name="table_search" class="form-control float-right rounded-pill pl-3" placeholder="@lang('package.search')">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>@lang('package.name')</th>
                                            <th>@lang('package.order_id')</th>
                                            <th>@lang('package.package_price')</th>
                                            {{-- <th>@lang('package.daily_return')</th>
                                            <th>@lang('package.yearly_return_coin')</th>
                                            <th>@lang('package.total_return_coin')</th>
                                            <th>@lang('package.steaking_period')</th>
                                            <th>@lang('package.capping_coin')</th>
                                            <th>@lang('package.expected_total_return')</th> --}}
                                            <th>@lang('package.date')</th>
                                            <th>@lang('package.payment_status')</th>
                                            <th>@lang('package.hide')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orderpackages as $orderpackage)
                                        <tr>
                                            <th>{{$orderpackage->package->name}}</th>
                                            <td>{{$orderpackage->id}}</td>
                                            <td>$ {{$orderpackage->price}}</td>
                                            {{-- <td>{{$orderpackage->package->daily_returns}}</td>
                                            <td>{{$orderpackage->package->yaerly_returns}}</td>
                                            <td>{{$orderpackage->package->total_returns}}</td>
                                            <td>{{$orderpackage->package->period_days}} @lang('package.months')</td>
                                            <td>{{$orderpackage->package->capping_coin}}</td>
                                            <td>{{number_format($orderpackage->package->packageTotal($orderpackage->package->id),2, ',', '.')}} </td> --}}
                                            <td>{{date('d/m/Y',strtotime($orderpackage->created_at))}}</td>
                                            <td>
                                                @if($orderpackage->payment_status == 1)
                                                    <span class="rounded-pill bg-success px-4 py-1">@lang('package.paid')</span>
                                                @elseif($orderpackage->payment_status == 2)
                                                    <span class="rounded-pill bg-warning px-4 py-1">@lang('package.cancelled')</button>
                                                @else
                                                    <span class="rounded-pill bg-primary px-4 py-1">@lang('package.waiting')</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($orderpackage->payment_status != 1)
                                                    <button class="btn rounded-pill bg-info px-4 py-1"><a href="{{route('packages.hide', ['id' => $orderpackage->id])}}">@lang('package.btn_hide')</a></button>
                                                @else
                                                <button class="btn rounded-pill bg-info px-4 py-1" disabled><a href="{{route('packages.hide', ['id' => $orderpackage->id])}}">@lang('package.btn_hide')</a></button>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <p>@lang('package.any_packages_registered')</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix py-3">
                                {{$orderpackages->links()}}
                            </div>
                        </div>
            </div>
        </div>
    </section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var target = document.querySelector('#minting-nav');
        var collapse = new bootstrap.Collapse(target);
        collapse.show();
    });
</script>
@endsection