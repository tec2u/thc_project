<!DOCTYPE html>
<html lang="en" style="font-family: Poppins, sans-serif">

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nextgen Investment</title>
    @include('welcome.includes.assets.css')
</head>

<style>
    .image {
        flex-basis: 20%;
        padding: 5px;
    }

    .image img {
        max-width: 100%;
        height: auto;
    }

    .container-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .section-info {
        display: none;
    }

    .fundovi {
        background-image: url("../../assetsWelcome/images/palacio.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        opacity: 0.1;
    }
</style>

<body style="overflow-x: hidden;">
    @include('welcome.includes.header')
    <div id="crypto-widget-CoinMarquee">
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
    </div>



    <!-- whats-->
    <a href="https://api.whatsapp.com/send?phone=971585221677" target="_blank" class="whatsapp-fixo"><i class="fab fa-whatsapp"></i></a>

    <!-- Imagem -->
    <div class="imagem-fixa">
        <img src="../../assetsWelcome/images/google.png">
    </div>

    <!-- End: Navbar Right Links -->
    <!-- <section style="backdrop-filter: blur(0px);filter: brightness(120%) grayscale(0%) saturate(120%);position:relative;" id="herosection">
        <div style="width: 100%; height: 82vh;background: linear-gradient(rgba(0,0,0,0.83), rgba(0,0,0,0.78));">
            <video style="position: absolute; top: 0; left: 0; width: 100%; height: 82vh; object-fit: cover;opacity: 0.6;" controls autoplay>
                <source src="../../assetsWelcome/images/land.mp4" type="video/mp4">
            </video>
        </div>
    </section> -->
    <section class="testwel espacoy1">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mt-5 mb-5">
                    <div class="embed-responsive embed-responsive-16by9" style="display: flex;
      justify-content: center;
      align-items: center;">
                        <video class="video1 embed-responsive-item" controls src="../../assetsWelcome/images/land.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></video>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-info2">
                        <ul class="info-list" style="">
                            <li>@lang('leadpage.new.li1')</li>
                            <li>@lang('leadpage.new.li2')</li>
                            <li>@lang('leadpage.new.li3')</li>
                            <li>@lang('leadpage.new.li4')</li>
                        </ul>
                        <ul class="info-list section-info" style="">
                            <li>@lang('leadpage.new.li5')</li>
                            <li>@lang('leadpage.new.li6')</li>
                            <li>@lang('leadpage.new.li7')</li>
                            <li>@lang('leadpage.new.li8')</li>
                            <li>@lang('leadpage.new.li9')</li>
                            <li>@lang('leadpage.new.li10')
                            </li>
                            <li>@lang('leadpage.new.li11')</li>
                            <li>@lang('leadpage.new.li12')</li>
                            <li>@lang('leadpage.new.li13')</li>
                            <li>@lang('leadpage.new.li14')</li>
                        </ul>
                    </div>
                    <button class="login-btn2 col-md-12 text-center" style="border-color: #fff;" id="ler-mais">@lang('leadpage.new.btnli')</button>
                </div>
            </div>
        </div>
    </section>

    <section class="espacoy" style="background: var(--bs-black);">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <p class="phero">@lang('leadpage.why.li1')</p>
                    <p class="phero22">@lang('leadpage.why.li2')
                        <br><br>
                        ◉ @lang('leadpage.why.li3')
                        <br><br>
                    <p class="phero23">◉ @lang('leadpage.why.li4')</p>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="video" src="@lang('videos.backoffice')" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="login-btn-wrapper text-center">
                <a href="{{ route('register') }}" class="login-btn2 col-md-12">@lang('leadpage.why.li5')</a>
            </div>
        </div>
    </section>
    <div class="text-center">
        <h2 class="text-dark mb-4 mt-5 about-txt">@lang('leadpage.client.li1')</h2>
    </div>
    <div class="container-img">
        <div class="image">
            <img src="../../assetsWelcome/images/gibson.jpg">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/brinkley.jpg">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/douglas.jpg">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/sheik.jpg">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/wozniak.jpg">
        </div>
    </div>

    <div class="text-center">
        <h2 class="text-dark mb-4 mt-5 about-txt">@lang('leadpage.client.li2')</h2>
    </div>
    <!-- <div class="galeria">
        <img src="../../assetsWelcome/images/accenture.png">
        <img src="../../assetsWelcome/images/bbc.png">
        <img src="../../assetsWelcome/images/cw.png">
        <img src="../../assetsWelcome/images/forbes.png">
        <img src="../../assetsWelcome/images/gilette.png">
        <img src="../../assetsWelcome/images/heinecken.png">
        <img src="../../assetsWelcome/images/loreal.png">
        <img src="../../assetsWelcome/images/nbc.png">
        <img src="../../assetsWelcome/images/pg.png">
        <img src="../../assetsWelcome/images/philips.png">
        <img src="../../assetsWelcome/images/reckitt.png">
        <img src="../../assetsWelcome/images/redner.png">
        <img src="../../assetsWelcome/images/sp_excellence.png">
        <img src="../../assetsWelcome/images/top100.png">
    </div> -->
    <div class="container-img">
        <div class="image">
            <img src="../../assetsWelcome/images/accenture.png" alt="Imagem 1">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/bbc.png" alt="Imagem 2">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/cw.png" alt="Imagem 3">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/forbes.png" alt="Imagem 4">
        </div>
    </div>
    <div class="container-img">
        <div class="image">
            <img src="../../assetsWelcome/images/nbc.png" alt="Imagem 5">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/redner.png" alt="Imagem 3">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/sp_excellence.png" alt="Imagem 4">
        </div>
        <div class="image">
            <img src="../../assetsWelcome/images/top100.png" alt="Imagem 5">
        </div>
    </div>
    <section class="espacoy1 testwel">



        <!-- Pop-up com o formulário -->


        <div class="container-fluid px-0">
            <div class="row g-2">
                <h2 class="text-dark mb-5 about-txt">@lang('leadpage.test.li1')</h2>
                <div class="col-md-4">
                    <div class="ratings text-center ">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Martin Becker</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>@lang('leadpage.test.li3')
                                <br>@lang('leadpage.test.li4')<br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ratings text-center ">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Christian Stückl</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>@lang('leadpage.test.li5')<br><br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ratings text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="mb-0 text-center mb-4">@lang('leadpage.test.li2'), Sandra Schneider</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>@lang('leadpage.test.li6')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-btn-wrapper mt-5">
                <a href="{{ route('register') }}" class="login-btn2">@lang('leadpage.why.li5')</a>
            </div>
        </div>
    </section>

    @include('welcome.includes.footer')
    <!-- End: Footer Dark -->
    <!-- Start: Modais -->
    <section>
        <div style="overflow-x: hidden !important">
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h3 class="modal-title">
                                <span style="color: rgb(150, 150, 150);">
                                    Waiting For Content
                                </span>
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bgmodal">
                            <div class="col-md-12 text-center mb-5">
                                <h1>@lang('leadpage.accounts.freedom.title')</h1>
                                <p class="text-black-50 plimit mb-4">
                                    @lang('leadpage.accounts.freedom.text')<br />
                                </p>
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="mb-3">@lang('leadpage.accounts.cryptocurrencies')<br /></h2>
                                <ul class="list-unstyled text-start px-5 my-5">
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies1')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies2')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies3')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies4')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies5')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies6')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies7')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies8')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies9')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies10')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies11')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.cryptocurrencies12')<br />
                                    </li>
                                </ul>
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button" href="{{ route('register') }}">@lang('leadpage.accounts.freedom.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark">
                            <button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h3 class="modal-title">
                                <span style="color: rgb(150, 150, 150);">
                                    Crypto to Cash
                                </span>
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bgmodal">
                            <div class="col-md-12 text-center mb-5">
                                <h1>@lang('leadpage.accounts.freedom.title')</h1>
                                <p class="text-black-50 plimit mb-4">
                                    @lang('leadpage.accounts.freedom.text')<br />
                                </p>
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="mb-3">@lang('leadpage.accounts.traditional')<br /></h2>
                                <ul class="list-unstyled text-start px-5 my-5">
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional1')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional2')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional3')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional4')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional5')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional6')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional7')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.accounts.traditional8')<br />
                                    </li>
                                    <li class="fs-6 text-black-50 mb-1 mt-4">
                                        @lang('leadpage.accounts.traditional9')<br />
                                    </li>
                                </ul>
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button" href="{{ route('register') }}">@lang('leadpage.accounts.freedom.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark">
                            <button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h4 class="modal-title">Crypto to Crypto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Aguardando conteudo</p>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark"><button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div> -->
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-4">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h4 class="modal-title">Spend Crypto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bgmodal">
                            <div class="col-md-12 text-center mb-5">
                                <h1>PAY YOUR WAY, IN STYLE</h1>
                                <p class="text-black-50 plimit mb-4">
                                    A card that allows you to spend digital and traditional currencies seamlessly
                                    anywhere in the world.
                                    Spend 150+ currencies at millions of retailers and service providers, in store or
                                    online.<br />
                                </p>
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class=""> @lang('leadpage.card.flexible')<br /><br /></h2>
                                <ul class="list-unstyled text-start px-5 mb-5">
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.flexible1')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.flexible2')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.flexible3')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.flexible4')&nbsp;<br />
                                    </li>
                                </ul>
                                <!-- <a class="btn btn-dark d-block orderbtn mt-5" role="button" href="#">@lang('leadpage.card.cards.btn')</a> -->
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="mb-3"> @lang('leadpage.card.payment')<br /></h2>
                                <ul class="list-unstyled text-start px-5 my-5">
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.payment1')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.payment2')&nbsp;<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.payment3')<br />
                                    </li>
                                    <li class="text-black-50 mb-1">
                                        <i class="la la-chevron-circle-right"></i>&nbsp; @lang('leadpage.card.payment4')<br />
                                    </li>
                                </ul>
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button" href="{{ route('register') }}">@lang('leadpage.card.cards.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark"><button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal fade" role="dialog" tabindex="-1" id="modal-5">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h4 class="modal-title">FEES</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Aguardando conteudo</p>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark"><button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-6">
                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white-50 bg-dark">
                            <h4 class="modal-title">24/7 Concierge Services</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Aguardando conteudo</p>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark"><button class="btn btn-warning w-25" type="button" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div> -->
        </div>

        @if (isset($landing->id))
        <!-- Pop-up com o formulário -->
        <div class="modal fade" id="subscribe" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" id="form-subscribe">
                            @csrf
                            <div class="mb-3">
                                <label for="tel" class="form-label">Name</label>
                                <input type="text" class="form-control" id="tel" name="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="campaign_id" id="campaign_id" value="{{ $landing->id }}">
                                <input type="hidden" name="sponsor_id" value="{{ $id }}">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com
                                    ninguém.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="tel" placeholder="Phone" name="phone" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block " id="btn-send">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>
    <!-- End: Modais -->
    @include('welcome.includes.assets.js')

</body>
<script>
    var button = document.getElementById("ler-mais");
    var sectionInfo = document.querySelector(".section-info");
    var isOpen = false;

    button.addEventListener("click", function() {
        if (!isOpen) {
            sectionInfo.style.display = "block";
            button.innerHTML = "READ LESS";
            isOpen = true;
        } else {
            sectionInfo.style.display = "none";
            button.innerHTML = "READ MORE";
            isOpen = false;
        }
    });
</script>

</html>