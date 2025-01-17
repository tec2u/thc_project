@extends('layouts.header')
@section('content')

<main id="main" class="main">
    <section id="myreferrals" class="content">
        <div class="fade">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3">@lang('network.my_referrals')</h1>
                    <div class="col-12">
                        <p class="text-black responsive-p">Here you see the status and invested amount of your referrals.</p>
                    </div>
                    <h3 style='color:#fff'></h3>
                    @forelse($networks as $network)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class=" card card-widget widget-user-2 shadow">
                            <div class="widget-user-header bbcolorp">
                                <div class="widget-user-image">
                                    @if (!empty($network->user->image_path))
                                    <img class="img-circle elevation-2 mx-2" src="{{asset('storage/'.$network->user->image_path)}}" alt="@lang('network.user_avatars')" class="rounded-circle">
                                    @else
                                    <img class="img-circle elevation-2 mx-2" src="../../../assetsWelcome/images/nigcoin.png" alt="@lang('network.user_avatars')" class="rounded-circle">
                                    @endif
                                </div>
                                <h3 class="widget-user-username px-3">{{$network->user->login}}</h3>
                                <h3 class="widget-user-username px-3" style="font-size: 15px; ">{{$network->user->email}}</h3>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item p-4">
                                        <h6>
                                            @lang('network.total_investment') <span class="float-right">{{number_format($network->user->getTotalAttribute(), 2, ',', '.')}}</span>
                                        </h6>
                                    </li>
                                    <li class="nav-item p-4">
                                        <span>
                                            <h6>
                                                @lang('network.status')
                                                @if ($network->getTypeActivated($network->id) == "AllCards" or $network->getTypeActivated($network->id) == "PreRegistration")
                                                <span class="float-right badge rounded-pill bg-success px-3 py-2">@lang('network.active')</span>

                                                @else
                                                <span class="float-right badge rounded-pill bg-danger px-3 py-2">@lang('network.inactive')</span>
                                                @endif

                                            </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>@lang('network.any_referrals_registered')</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
