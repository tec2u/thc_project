@extends('layouts.header')
@section('content')
<style>
    #card-package {
        padding: 30px;
    }

    p.title-package {
        margin-left: 10px;
        font-size: 30px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .moldure {
        width: 100%;
        height: 300px;
        background-size: 100%;
        overflow: hidden;
        cursor: pointer;
    }

    img.imagem_zoon {
        max-width: 100%;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
    }

    img.imagem_zoon:hover {
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    h5.tittle-name {
        font-weight: bold;
    }

    .container-description {
        width: 100%;
        height: 120px;
    }

    p.number-packages {
        margin-left: 10px;
    }
</style>

<link rel="stylesheet" type="text/css" href="{{ asset('assetsWelcomeNew/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assetsWelcomeNew/css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('assetsWelcomeNew/css/templatemo-softy-pinko.css') }}">

<main id="main" class="main">
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Pricing Plans</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>You can start with $0! And gain trust in our platform!</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                @forelse($packages as $package)
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">{{ $package->name }}</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">{{ $package->price }}</span>
                                <span class="period">1 Time</span>
                            </div>
                            <ul class="list">
                                <li class="active">Access to Franchise System</li>
                                <li class="active">Access to Reports</li>
                                @if($package->name === 'Starter')
                                    <li class="active">50% of Rewards</li>
                                @else
                                    <li class="active">100% of Rewards with Multiplier & Yealy Pool</li>
                                    <li class="active">Access to weekly meetings with CEO</li>
                                    <li class="active">Access to Marketing Material</li>
                                    <li class="active">24/7 Support</li>
                                @endif
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{ route('packages.detail', ['id' => $package->id]) }}" class="main-button">Details</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p>@lang('package.any_products_registered')</p>
                @endforelse
                <!-- ***** Pricing Item End ***** -->
            </div>
            <div class="card-footer clearfix py-3">
                {{ $packages->links() }}
            </div>
        </div>
    </section>
</main>
@endsection
