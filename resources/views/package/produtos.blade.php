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
        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
          <div class="pricing-item">
            <div class="pricing-header">
              <h3 class="pricing-title">Starter</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">$</span>
                <span class="price">0.00</span>
                <span class="period">monthly</span>
              </div>
              <ul class="list">
                <li class="active">Access to Franchise System</li>
                <li class="active">Access to Reports</li>
                <li class="active">50% of Rewards</li>
            
                <li>24/7 Support</li>

              </ul>
            </div>
            <div class="pricing-footer">
              <a href="" class="main-button">Purchase Now</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->

        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
          <div class="pricing-item active">
            <div class="pricing-header">
              <h3 class="pricing-title">Premium</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">$</span>
                <span class="price">100.00</span>
                <span class="period">monthly</span>
              </div>
              <ul class="list">
              <li class="active">Access to Franchise System</li>
                <li class="active">Access to Reports</li>
                <li class="active">100% of Rewards (Without Multiplier & Pool)</li>
                <li class="active">Access to weekly meetings with CEO</li>
                <li class="active">Access to Marketing Material</li>
                <li>24/7 Support</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="" class="main-button">Purchase Now</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->

        <!-- ***** Pricing Item Start ***** -->
        <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
          <div class="pricing-item">
            <div class="pricing-header">
              <h3 class="pricing-title">Advanced</h3>
            </div>
            <div class="pricing-body">
              <div class="price-wrapper">
                <span class="currency">$</span>
                <span class="price">500.00</span>
                <span class="period">monthly</span>
              </div>
              <ul class="list">
              <li class="active">Access to Franchise System</li>
                <li class="active">Access to Reports</li>
                <li class="active">100% of Rewards with Multiplier & Yealy Pool</li>
                <li class="active">Access to weekly meetings with CEO</li>
                <li class="active">Access to Marketing Material</li>
                <li class="active">24/7 Support</li>
              </ul>
            </div>
            <div class="pricing-footer">
              <a href="" class="main-button">Purchase Now</a>
            </div>
          </div>
        </div>
        <!-- ***** Pricing Item End ***** -->
      </div>
    </div>
  </section>


<!--##########-->
  
    {{-- @include('flash::message') --}}
    <section id="produtos" class="content">
      <div class="fade">
        <div class="container-fluid">

          <div class="row-title">
            <p class="title-package">@lang('package.packages')</p>
            <p class="number-packages">
              @php $packages_number = count($packages); @endphp
              {{ $packages_number }} Packages
            </p>
          </div>

          <div class="container">
            <div class="row">
              @forelse($packages as $package)
                <div class="col-sm-4 card-deck hover ">
                  <div id="card-package" class="card ">

                    <div class='base-img'>
                      <div class='moldure'>
                        <img class='imagem_zoon' src='/img/packages/{{ $package->img }}'>
                      </div>
                    </div>

                    <h5 class="tittle-name">{{ $package->name }}</h5>

                    <div class="d-flex justify-content-between">
                      <h5 class="text-primary mb-3">R$ {{ number_format($package->price, 2, ',', '.') }}</h5>

                      </h5>
                    </div>

                    <div class="container-description">
                      @if (!empty($package->long_description))
                        <h6 class="text-description">{!! $package->long_description !!}</h6>
                      @else
                        <h6 class="text-description">Sem descrição!</h6>
                      @endif
                    </div>

                    <div class="card-body">
                      @if ($user->contact_id == null)
                        <a href="{{ route('packages.detail', ['id' => $package->id]) }}"
                          class="btn btn-dark m-4 rounded-pill"> @lang('package.details')</a>
                      @else
                        <a href="{{ route('packages.detail', ['id' => $package->id]) }}"
                          class="btn btn-dark m-4 rounded-pill"> @lang('package.details')</a>
                      @endif
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
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
