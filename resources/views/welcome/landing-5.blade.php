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
</style>

<body style="overflow-x: hidden;">
    @include('welcome.includes.header')
    <div id="crypto-widget-CoinMarquee">
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
            background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
    </div>



    <!-- whats-->
    <a href="https://api.whatsapp.com/send?phone=971585221677" target="_blank" class="whatsapp-fixo"><i
            class="fab fa-whatsapp"></i></a>


    <a href="https://www.provenexpert.com/nicolahollender/?utm_source=Widget&utm_medium=Widget&utm_campaign=Widge">
        <img src="../../assetsWelcome/images/proven.png" alt="Descrição da imagem" id="imagem-fixa" target="_blank">
    </a>

    <!-- Imagem -->
    <div class="imagem-fixa">
        <img src="../../assetsWelcome/images/google.png">
    </div>

    <!-- End: Navbar Right Links -->
    <section style="backdrop-filter: blur(0px);filter: brightness(120%) grayscale(0%) saturate(120%);position:relative;"
        id="herosection">
        <div style="width: 100%; height: 100vh;background: linear-gradient(rgba(0,0,0,0.83), rgba(0,0,0,0.78));">
            <video autoplay muted loop
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; object-fit: cover;opacity: 0.6;">
                <source src="../../videos/nigwelcome.mp4" type="video/mp4">
            </video>
            <div style="position: relative; z-index: 1;" class="container h-100">
                <div class="row justify-content-center align-items-center" style="height: 60%;">
                    <div class="col-md-10 col-lg-10 col-xl-8 d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center"
                        style="margin-top: 150px;">
                        <div class="text-center" style="margin: 0 auto;">
                            <p class="phero2">BASED ON PAST EXPERIENCE AND OUR SOLID NIG APPROACH</p>
                            <p class="phero">WE AIM FOR UP TO<span style="color: #00ff00;"> 2-11%</span></p>
                            <p class="phero4">RETURN ON INVESTMENT<span style="color: #00ff00;"> EVERY MONTH.</span>
                            </p>
                            <p class="phero2">WE REVOLUTIONIZE WEALTH MANAGEMENT!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="espacoy" style="background: var(--bs-black);">
        <div class="container mt-3">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9">
                    <p class="phero">WHY CHOOSE US?</p>
                    <p class="phero22">Our vision is to generate, protect, transfer and share wealth with innovative
                        solutions, latest technology and in-depth expertise for upmost security, 100% transparency and
                        full flexibility. We support individuals to become financially independent and show them how to
                        accelerate and pre-serve their wealth.
                        <br>
                        ◉ BASED ON PAST EXPERIENCE AND OUR SOLID NIG APPROACH, WE AIM FOR UP TO 5-10%.
                        <p class="phero23">◉ We have a Team with over 29 years of professional education and experience in financial
                        advisory, trading, investment and coaching.</p>
                    </p>
                    <iframe class="video" src=@lang('videos.backoffice') frameborder="0"
                        allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="login-btn-wrapper text-center">
                <a href="{{ route('register') }}" class="login-btn2 col-md-12">REGISTER NOW</a>
            </div>
        </div>
    </section>
    <section class="testwel mb-4 espacoy5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-container embed-responsive embed-responsive-16by9">
                        <iframe class="video embed-responsive-item" src="../../assetsWelcome/images/land.mp4"
                            frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                        <div class="login-btn-wrapper text-center">
                            <a href="https://calendly.com/nigdubai/30min" class="login-btn2 col-md-12">Book a free consultation</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-info">
                        <ul class="info-list" style="">
                            <li>Up to 5-10% profit every month achieved for our clients over the past decades, we aim for similar results in the future.</li>
                            <li>Team of professional traders and financial experts have over 25 years of professional experience in trading and investment.</li>
                            <li>NIG approach is combining more conservative asset classes like stocks with higher performing asset classes like commodities and forex.</li>
                            <li>The portfolio  is diversified to mitigate risk up to maximum 1% while boosting performance.</li>
                            <li>Funds can be transferred and redeemed via fiat and cryptocurrency at any time.</li>
                            <li>Regulated instruments, platforms and tools, segregated accounts to secure your initial investment.</li>
                            <li>Profit sharing model - the profit that is exceeding the clients profit of 5% per month is used to ensure high liquidity for payouts and finance the transactions, systems, tools, traders and company. In addition, a client bonus will be paid out at the end of the year of the accumulated profits over the last years.</li>
                            <li>Attractive affiliate program for referrals with direct bonus of 2% and up to 12% at the end of the year.</li>
                            <li>Disclaimer.</li>
                            <li>Please keep in mind that trading and investment involves risk and you should only invest what you are willing to loose in the worst case. Legally we can not gurantee any profits nor can we guarantee no losses. We, our traders, partners and investors are not liable for any losses, damages or influences of regulations, laws, wars or any other event.</li>
                            <li>100% security and transparency with latest blockchain and AI technology, personal
                                dashboard, daily access, monthly reports.</li>
                            <li>We are not a scam, ponzi scheme nor a MLM. We are a private investment club for private investors and we do not operate under a regulated company.</li>
                            <li>We aim for high returns, limited risk, upmost security,100% transparency and  high client satisfaction.</li>
                            <li>With the registration and transfer of funds, you agree that you have understood the disclaimer. In case of any questions or dispute, please contact us per email.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <h2 class="text-dark mb-4 mt-5 about-txt">OUR CLIENTS, BUSINESS PARTNERS AND SUPPORTERS</h2>
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
        <h2 class="text-dark mb-4 mt-5 about-txt">FAMOUS FROM</h2>
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
    <section class="espacoy testwel">



        <!-- Pop-up com o formulário -->


        <div class="container-fluid px-0">
            <div class="row g-2">
                <h2 class="text-dark mb-5 about-txt">TESTIMONIALS</h2>
                <div class="col-md-4">
                    <div class="ratings text-center ">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="mb-0 text-center mb-4">Client, Martin Becker</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>We received an in-depth consultation how we could save taxes with a different corporate
                                structure and how we would pay 0 taxes at the end when we found a company to Dubai. We
                                asked NIG to set up the Company and we were very happy to obtain the residence and
                                emirates ID and bank accounts after just a few days.
                                <br>Thank you very much.<br><br><br>
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
                    <h5 class="mb-0 text-center mb-4">Client, Christian Stückl</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>At the beginning I was careful to invest since the quranteed monthly performance is
                                really high. After a trial period for a couple of months where I constantly gained 5%
                                ROI each month. I increased my investment to over EUR 500k. I achieve 8% ROI every month
                                and will top up soon to over EUR 1m to gain 15% month by month. I am very satisfied and
                                highly recommend NextGen Investment Group.<br><br><br></p>
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
                    <h5 class="mb-0 text-center mb-4">Client, Sandra Schneider</h5>
                    <div class="card p-3 px-4">
                        <div class="user-content">
                            <p>I wanted to learn how to invest in the stock market and real estates while saving taxes.
                                I am thrilled by the option trading and real estate program at the academy of NextGen
                                Investment Group. I just bought my first property and gain 5-10% ROI every month with
                                option trading. On top NextGen Investment Group founded successfully and within 3 days
                                my company in Dubai with office, business account, visa and emirates ID. I am tax free
                                and financial independent now. Thank you very much. You changed my life completely
                                within a couple of month.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-btn-wrapper mt-5">
                <a href="{{ route('register') }}" class="login-btn2">REGISTER NOW</a>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button"
                                    href="{{ route('register') }}">@lang('leadpage.accounts.freedom.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark">
                            <button class="btn btn-warning w-25" type="button"
                                data-bs-dismiss="modal">Close</button>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button"
                                    href="{{ route('register') }}">@lang('leadpage.accounts.freedom.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark">
                            <button class="btn btn-warning w-25" type="button"
                                data-bs-dismiss="modal">Close</button>
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
                            <h4 class="modal-title">Spend Crypto</h4><button type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button"
                                    href="{{ route('register') }}">@lang('leadpage.card.cards.btn')</a>
                            </div>
                        </div>
                        <div class="modal-footer text-white-50 bg-dark"><button class="btn btn-warning w-25"
                                type="button" data-bs-dismiss="modal">Close</button></div>
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

        <!-- Pop-up com o formulário -->
        <div class="modal fade" id="subscribe" role="dialog">
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <form action=" {{ route('funnel.store') }} " method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tel" class="form-label">Name</label>
                                <input type="text" class="form-control" id="tel" name="name"
                                    placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="campaign_id" id="campaign_id">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Email">
                                {{-- <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com ninguém. -</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="tel" placeholder="Phone"
                                    name="phone">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block ">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($landing))
            <div class="modal fade" id="modal-campaign" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="1000">
                                <div class="carousel-inner">

                                    @php $i = 0; @endphp

                                    @foreach ($landing as $item)
                                        @php
                                            $i++;
                                        @endphp
                                        <div
                                            class="carousel-item
                                    @if ($i == 1) active @endif
                                    ">
                                            <div class="card" style="width: 100%">
                                                <img src="{{ asset('images/nigcoin.png') }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title"> {{ $item->name_campaign }} e</h5>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#subscribe"
                                                        onclick="setValueIdCampaign( {{ $item->id }} )">
                                                        Subscribe</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- End: Modais -->
    @include('welcome.includes.assets.js')

</body>

</html>
