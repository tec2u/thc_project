@extends('layouts.header')
@section('content')
    <main id="main" class="main">
        <section id="poolcommission" class="content">
            <div class="fade">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Daily Commission
                                {{-- @lang('reports.pool_commission.title') --}}
                            </h1>
                            <div class="card shadow my-3">
                                <div class="card-header bbcolorp">
                                    <h3 class="card-title">
                                        Daily Commission
                                        {{-- @lang('reports.pool_commission.title') --}}
                                    </h3>
                                </div>
                                <div class="card-header py-3">
                                    <!-- <button type="button" class="btn btn-info btn-sm rounded-pill" style="width: 80px;">CSV</button>
                                <button type="button" class="btn btn-success btn-sm rounded-pill" style="width: 80px;">Excel</button>
                                <button type="button" class="btn btn-danger btn-sm rounded-pill" style="width: 80px;">PDF</button> -->
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm my-1" style="width: 250px;">
                                            <input type="text" name="table_search"
                                                class="form-control float-right rounded-pill pl-3"
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
                                                <th>Id</th>
                                                <th>@lang('reports.referral_commission.descr')</th>
                                                <th>
                                                    Bonus
                                                    {{-- @lang('reports.referral_commission.price') --}}
                                                </th>
                                                {{-- <th>@lang('reports.referral_commission.from')</th> --}}
                                                <th>@lang('reports.referral_commission.id_order')</th>
                                                <th>@lang('reports.referral_commission.date')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($bancos as $banco)
                                                <tr>
                                                    <td>{{ $banco->id }}</th>
                                                    <td>
                                                        @if ($banco->description == 15)
                                                            Direct Referral
                                                        @elseif($banco->description == 16)
                                                            Daily Commission
                                                        @elseif($banco->description == 17)
                                                            Pool
                                                        @elseif($banco->description == 18)
                                                            Aggregate Compensation
                                                        @endif
                                                    </td>

                                                    <td>$ {{ number_format($banco->price, 2, ',', '.') }}</td>
                                                    <td>{{ $banco->order_id }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($banco->created_at)) }}</td>
                                                </tr>
                                            @empty
                                                <p class="m-4 fst-italic">
                                                    {{-- @lang('reports.referral_commission.empyt') --}}
                                                    You don't have any registered daily bonuses!
                                                </p>
                                            @endforelse
                                        </tbody>

                                    </table>
                                </div>
                                <div class="card-footer clearfix py-3">
                                    {{ $bancos->links() }}
                                </div>
                            </div>
    </main>
@endsection
