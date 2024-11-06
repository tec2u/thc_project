@extends('adminlte::page')

@section('title', 'View Document')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View Document</h1>
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
                    <h3 class="card-title">View Document</h3>
                </div>
                <form action="{{ route('admin.document.update', ['id' => $document->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-8">
                                    <label for="document_approved">
                                   <table><tr><td> <input class="form-control form-control-sm" type="radio" name="document_approved"
                                            id="document_approved" value="1"
                                            @if ($document->document_approved == 1) checked="checked" @endif>
                                        </td><td>
                                            Approve </td></tr></table>
                                        
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <label for="document_not_approved">
                                    <table><tr><td>
                                        <input class="form-control form-control-sm" type="radio" name="document_approved"
                                            id="document_not_approved" value="0"
                                            @if ($document->document_approved == 0) checked="checked" @endif>
                                            </td><td>

                                            Disapprove</td></tr></table>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <a class="btn brn-lager btn-warning"
                                        href="{{ asset('storage/' . $document->document_name) }}" target="_blank"
                                        rel="noopener noreferrer">View Document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn brn-lager btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
