@extends('layouts.header')
@section('content')
<style>
    .progamm {
        width: 100%;
        height: 100px;
        border: 1px solid #ccc;
        transition: border-color 0.3s;
        text-align: center;
        vertical-align: middle;
        line-height: 600%;
    }

    .progamm:hover {
        border-color: black;
        cursor: pointer;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .col-md-3 .card {
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .card h3 {
        margin-top: 0;
    }

    .card p {
        margin-bottom: 0;
        font-size: 20px;
    }

    .card input[type="radio"] {
        display: none;
    }

    .card label {
        display: flex;
        flex-direction: column;
        padding: 10px;
        cursor: pointer;
    }

    .equal-height {
        height: 350px;
    }

    @media (max-width: 1730px) {
        .equal-height {
            height: 220px;
        }
    }

    @media (max-width: 1730px) {
        .txt-pur {
            font-size: 10px;
        }
    }

    .card:hover {
        border: 2px solid black;
    }

    .txt-pur {
        font-size: 25px;
    }
</style>
<main id="main" class="main">
    @include('flash::message')
    <section id="produtos" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>@lang('home.purchase.li1')</h1>
                        <div class="col-12">
                            <p class="text-black responsive-p">@lang('home.purchase.li2')</p>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                            <div class="col-md-3">
                                <a href="{{ route('packages.index') }}">
                                    <div class="card">
                                        <label for="card2">
                                            <img src="../../assetsWelcome/images/ewallet.jpeg" alt="Imagem do card" class="img-fluid">
                                            <p class="mt-5 text-center txt-pur">@lang('home.purchase.li3') CRYPTO</p>
                                        </label>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('packages.packagelog') }}">
                                    <div class="card">
                                        <label for="card2">
                                            <img src="../../assetsWelcome/images/carros.jpg" alt="Imagem do card" class="img-fluid widthx">
                                            <p class="mt-5 text-center txt-pur">@lang('home.purchase.li4')</p>
                                        </label>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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
