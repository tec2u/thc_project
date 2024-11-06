@extends('layouts.header')
@section('content')
    <main id="main" class="main">
        @include('flash::message')
        <section id="transaction" class="content">
            <div class="fade">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                REFERAL TRANSACTION
                                {{-- @lang('reports.transaction.title') --}}
                            </h1>
                            <div class="card shadow my-3">
                                <div class="card-header bbcolorp">
                                    <h3 class="card-title">@lang('reports.transaction.title1')</h3>
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
                                                <th>ID</th>
                                                <th>@lang('reports.transaction.descr')</th>
                                                <th>@lang('reports.transaction.price')</th>
                                                <th>@lang('reports.transaction.from')</th>
                                                <th>@lang('reports.transaction.id_order')</th>
                                                <th>@lang('reports.transaction.date')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                            @forelse($transactions as $transaction)
                                                <tr>
                                                    <th>{{ $transaction->id }}</th>
                                                    <td>
                                                        @if ($transaction->description == 15)
                                                            Direct Referral
                                                        @elseif($transaction->description == 16)
                                                            Daily Commission
                                                        @elseif($transaction->description == 17)
                                                            Pool
                                                        @elseif($transaction->description == 18)
                                                            Aggregate Compensation
                                                        @else
                                                            {{ $transaction->config_bonus->description }}
                                                        @endif
                                                    </td>
                                                    <td>$ {{ number_format($transaction->price, 2, ',', '.') }}</td>
                                                    <td>{{ $transaction->getUserOrder($transaction->order_id) }}</td>
                                                    <td>{{ $transaction->order_id }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($transaction->created_at)) }}</td>
                                                </tr>
                                            @empty
                                                <p class="m-4 fst-italic">@lang('reports.transaction.empyt')</p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer clearfix py-3">
                                    {{ $transactions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
