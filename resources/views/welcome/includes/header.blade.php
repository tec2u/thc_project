  <!-- Start: Navbar Right Links -->
  <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-sm navbarstyle">
      <video autoplay loop muted style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:0;">
          <source src="../../videos/nigwelcome.mp4" type="video/mp4">
      </video>
      <div class="container" style="z-index:0;"><a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}"><img src="../../assetsWelcome/images/NIG.png" class="img-fluid" width="400px"></a><button data-bs-toggle="collapse" class="navbar-toggler fs-6 fw-light text-white text-bg-warning shadow-lg mb-4" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navcol-2">
              <ul class="navbar-nav navbar-nav-scroll ms-auto">
                  <!-- <li class="nav-item"><a class="nav-link active anavlink" href="{{ url('/cards') }}">@lang('leadpage.btn.cards')</a></li>
                <li class="nav-item"><a class="nav-link anavlink" href="{{ url('/accounts') }}">@lang('leadpage.btn.accounts')</a></li>
                <li class="nav-item"><a class="nav-link active anavlink" href="{{ url('/concierge') }}">@lang('leadpage.btn.concierge')</a></li> -->
              </ul>
              <div class="text-center" style="margin: 0 auto;">
                  <p class="phero2" style="font-size: 15px;">@lang('leadpage.header.txt1')</p>
                  <p class="phero" style="font-size: 15px;">@lang('leadpage.header.txt2')<span style="color: #00ff00;"> @lang('leadpage.header.txt3')</span></p>
                  <p class="phero4" style="font-size: 15px;">@lang('leadpage.header.txt4')<span style="color: #00ff00;"> @lang('leadpage.header.txt5')</span>
                  </p>
                  <p class="phero2" style="font-size: 15px;">@lang('leadpage.header.txt6')</p>
              </div>
              @if (Route::has('login'))
              @auth
              <a role="button" class="btn link-warning ms-md-2 btnnavlog" href="{{ route('admin.home') }}">@lang('leadpage.btn.dashboard')</a>
              @else
              <a role="button" class="btn link-warning ms-md-2 btnnavlog" href="{{ route('login') }}">@lang('leadpage.btn.login')</a>
              @if (Route::has('register'))
              @if (isset($login))
              @if (Route::has('indication.index'))
              @if (isset($id))
              <a role="button" class="btn btn-warning ms-md-2 btnnav" href="{{ route('indication.register', $id) }}">@lang('leadpage.btn.join')</a>
              @endif
              @else
              <a role="button" class="btn btn-warning ms-md-2 btnnav" href="{{ route('register') }}">@lang('leadpage.btn.join')</a>
              @endif
              @else
              <a role="button" class="btn btn-warning ms-md-2 btnnav" href="{{ route('register') }}">@lang('leadpage.btn.join')</a>
              @endif

              <!-- botao join com efeito fade <a role="button" class="btn btn-warning ms-md-2 btnnav" href="{{ route('register') }}" data-aos="zoom-in-down" data-aos-duration="1600" data-aos-delay="1800" data-aos-once="true">@lang('leadpage.btn.join')</a> -->
              @endif
              @endauth
              @endif
          </div>
      </div>
  </nav>