@extends('adminlte::page')

@section('title', 'Bonus of the day')

@section('content_header')
    <div class="alignHeader">
        <h4>Payouts Of The Day</h4>
    </div>
    <i class="fa fa-home ml-3"></i> @lang('admin.level.subtitle')
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('admin.reports.flash-message')
                <h1>Bonus of the day</h1>
                <div class="card shadow my-3">
                    <div class="card-header bbcolorp">
                        <h3 class="card-title">Bonus of this date: {{ $data }}</h3>
                    </div>
                    <div class="card-header py-3">
                        {{-- <a href="{{ route('admin.order-bonus.export') }}" type="button" class="btn btn-info btn-md">Export
                            Excel</a> --}}

                        <div class="card-tools">
                            <div class="input-group input-group-sm my-1" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right rounded-pill pl-3"
                                    placeholder="@lang('withdraw.search')">
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
                                    <th>@lang('reports.referral_commission.id_order')</th>

                                    <th>@lang('reports.referral_commission.from')</th>

                                    <th> Amount invested </th>
                                    <th>
                                        Paid percentage
                                    </th>
                                    <th>
                                        Bonus
                                    </th>
                                    <th>@lang('reports.referral_commission.date')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bancos as $banco)
                                    <tr>
                                        <td>{{ $banco->order_id }}</td>
                                        <td>{{ $banco->getUserOrder($banco->order_id) }}</td>

                                        <td> {{ number_format($banco->getOrder($banco->order_id)->price, 2, ',', '.') }}</td>
                                        <td> {{ $banco->percent_pay }} % </td>
                                        <td> {{ number_format($banco->price, 2, ',', '.') }}</td>
                                        <td> {{ date('d/m/Y', strtotime($banco->created_at)) }}</td>
                                    </tr>
                                @empty
                                    <td colspan="5">
                                        <p class="m-4 fst-italic text-center">
                                            {{-- @lang('reports.referral_commission.empyt') --}}
                                            You don't have any Bonus Daily registered!
                                        </p>
                                    </td>
                                @endforelse

                            </tbody>
                        </table>


                        <div class="card-footer clearfix py-3">
                            {{ $bancos->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
