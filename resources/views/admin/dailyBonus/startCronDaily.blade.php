@extends('adminlte::page')

@section('title', 'Start Cron')

@section('content_header')
<h4>@lang('admin.support.title')</h4>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Start Cron</h3>
    </div>
    <div class="card-body table-responsive">
        <h4>Start Daily Compensation Payment</h4>
        <button class="btn btn-primary btn-sm m-0" onclick="confirmStart();">Start</button>
    </div>
</div>

@stop
@section('css')
<link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
@stop

@section('js')
<script>
    function confirmStart() {
        if (confirm('Do you want to initiate the daily compensation payment manually?')) {
            location.href = "{!! route('admin.cron-daily') !!}";
        } else {
            history.go(-1);
        }
    }
</script>
@stop