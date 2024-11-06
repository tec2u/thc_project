@extends('layouts.header')
@section('content')
<main id="main" class="main">
    <section id="poolcommission" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            LINK TO REGISTER
                        </h1>
                        <div class="card shadow my-3">
                            <div class="card-header bbcolorp">
                                <h3 class="card-title">
                                    LINK TO REGISTER
                                </h3>
                            </div>
                            <div class="card-header py-3">

                                <div class="col-12">
                                    <div class="info-box mb-4 shadow ">
                                        <span class="info-box-icon"><i class="bi bi-star-fill text-dark"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">LINK TO LANDING PAGE</span>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="landing" value="{{ route('indication.index', Auth::user()->id) }}">
                                                        <button class="btn btn-dark orderbtn linkcopy px-4 mr-3" type="button" onclick="FunctionCopy1()">Copy</button>
                                                        <a href="{{ route('indication.index', Auth::user()->id) }}" target="_blank" class="btn btn-dark orderbtn linkcopy px-4">LINK</a>
                                                    </div>

                                                    <span class="info-box-text">LINK TO REGISTER</span>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="referral" value="{{ route('indication.register', Auth::user()->id) }}">
                                                        <button class=" btn btn-dark orderbtn linkcopy px-4 mr-3" type="button" onclick=" FunctionCopy2()">Copy</button>

                                                        <a href="{{ route('indication.register', Auth::user()->id) }}" target="_blank" class=" btn btn-dark orderbtn linkcopy px-4">LINK</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</main>


<script>
    function FunctionCopy1() {
        var linkInput = document.getElementById("landing");
        linkInput.select();
        document.execCommand("copy");
        linkInput.setSelectionRange(0, 0);
      }
</script>
<script>
    function FunctionCopy2() {
        var linkInput = document.getElementById("referral");
        linkInput.select();
        document.execCommand("copy");
        linkInput.setSelectionRange(0, 0);
      }
</script>
@endsection