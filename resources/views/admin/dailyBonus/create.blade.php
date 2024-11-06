@extends('adminlte::page')

@section('title', 'Create Bonus Configuration')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@lang('admin.unilevel.titlecreate')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('admin.unilevel.subtitle')</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{route("admin.configBonus.list")}}">@lang('admin.unilevel.subtitle2')</a></li>
                <li class="breadcrumb-item active">@lang('admin.unilevel.titlecreate')</li> --}}
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    @include('flash::message')
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">@lang('admin.unilevel.titlecreate2')</h3>
                </div>
                <form action="{{ route('admin.bonus-daily.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="level">
                                Value Percentage
                                {{-- @lang('admin.unilevel.table.col1') --}}
                            </label>
                            <input type="number"
                                class="form-control form-control-lg @error('value_perc') is-invalid @enderror"
                                id="value_perc" name="value_perc" placeholder="1 ~ 100" value="{{ old('level') }}">
                            @error('value_perc')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">
                                Status
                                {{-- @lang('admin.unilevel.table.col1') --}}
                            </label>

                            <select class="form-control form-control-lg @error('status') is-invalid @enderror"
                                id="status" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>

                            @error('status')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id">
                                User
                                {{-- @lang('admin.unilevel.table.col1') --}}
                            </label>

                            <select class="form-control form-control-lg @error('user_id') is-invalid @enderror"
                                id="user_id" name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>

                            @error('user_id')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_save">
                                Date
                                {{-- @lang('admin.unilevel.table.col1') --}}
                            </label>

                            <input type="date"
                                class="form-control form-control-lg @error('date_save') is-invalid @enderror"
                                id="date_save" name="date_save" value="{{ old('date_save') }}">

                            @error('date_save')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn brn-lager btn-success btn-block">@lang('admin.unilevel.register')</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    {{-- @if (isset($errors) && count($errors))
     
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }} </li>
@endforeach
</ul>

@endif --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: "classic"
            });
        });
    </script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@stop
