<!DOCTYPE html>
<html lang="en" style="font-family: Poppins, sans-serif;">

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nextgen Investment</title>
    <link rel="icon" type="image/png" sizes="400x400" href="assetsWelcome/images/favinig.png?h=d4f1f732da6a3628bf50f2cd6cc57561">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assetsWelcome/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assetsWelcome/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assetsWelcome/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assetsWelcome/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assetsWelcome/css/styles.css">

</head>


<body style="overflow-x: hidden !important">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-sm navbarstyle" data-aos="fade-down" data-aos-duration="1600" data-aos-delay="1800" data-aos-once="true">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}"><img src="../assetsWelcome/images/NIG.png" class="img-fluid" width="400px"></a><button data-bs-toggle="collapse" class="navbar-toggler fs-6 fw-light text-white text-bg-warning shadow-lg mb-4" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav navbar-nav-scroll ms-auto">
                    <!-- <li class="nav-item"><a class="nav-link active anavlink" href="{{ url('/cards') }}">@lang('leadpage.btn.cards')</a></li>
                <li class="nav-item"><a class="nav-link anavlink" href="{{ url('/accounts') }}">@lang('leadpage.btn.accounts')</a></li>
                <li class="nav-item"><a class="nav-link active anavlink" href="{{ url('/concierge') }}">@lang('leadpage.btn.concierge')</a></li> -->
                </ul>
                @if (Route::has('login'))
                @auth
                <a role="button" class="btn link-light ms-md-2 btnnavlog" href="{{ route('admin.home') }}">@lang('leadpage.btn.dashboard')</a>
                @else
                <a role="button" class="btn link-light ms-md-2 btnnavlog" href="{{ route('login') }}">@lang('leadpage.btn.login')</a>
                @if (Route::has('register'))
                <a role="button" class="btn btn-light ms-md-2 btnnav" href="{{ route('register') }}" data-aos="zoom-in-down" data-aos-duration="1600" data-aos-delay="2200" data-aos-once="true">@lang('leadpage.btn.join')</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </nav>



    <div id="crypto-widget-CoinMarquee">
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
    </div>

    <!-- whats-->
    <a href="https://api.whatsapp.com/send?phone=971585221677" target="_blank" class="whatsapp-fixo"><i class="fab fa-whatsapp"></i></a>

    <a href="https://www.provenexpert.com/nicolahollender/?utm_source=Widget&utm_medium=Widget&utm_campaign=Widge">
        <img src="../../assetsWelcome/images/proven.png" alt="Descrição da imagem" id="imagem-fixa" target="_blank">
    </a>

    <!-- Imagem -->
    <div class="imagem-fixa">
        <img src="../assetsWelcome/images/google.png">
    </div>


    <!-- End: Navbar Right Links -->
    <section style="backdrop-filter: blur(0px);filter: brightness(120%) grayscale(0%) saturate(120%);position:relative;" id="herosection">

        <div style="width: 100%; height: 100vh;background: linear-gradient(rgba(0,0,0,0.83), rgba(0,0,0,0.78));">
            <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; object-fit: cover;opacity: 0.6;">
                <source src="videos/nigwelcome.mp4" type="video/mp4">
            </video>
            <div style="position: relative; z-index: 1;" class="container h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-10 col-lg-10 col-xl-8 d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center" style="margin-top: 150px;">
                        <div class="text-center" style="margin: 0 auto;">
                            <img class="text-uppercase fw-bold mb-3" src="../images/nigcoin.png" style="width: 40%;" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="800" data-aos-once="true"></img>
                            <p class="pherowel">WE GUARANTEE</p>
                            <p class="phero3wel">5%, 10% or 15%</p>
                            <p class="phero4wel">RETURN ON INVESTMENT EVERY MONTH.</p>
                            <p class="phero2wel">WE REVOLUTIONIZE WEALTH MANAGEMENT!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="espacoy2">
        <div class="container">
            <h2>OUR KEY FIGURES</h2>
            <div class="counter-wrapper">
                <div class="counter">
                    <span id="counter1" class="count">0</span>
                    <p>yrs experience</p>
                </div>
                <div class="counter">
                    <span id="counter2" class="count">0</span>
                    <p>satisfied clients</p>
                </div>
                <div class="counter">
                    <span id="counter3" class="count">0</span>
                    <p>projects</p>
                </div>
                <div class="counter">
                    <span id="counter4" class="count">0</span>
                    <p>performance</p>
                </div>
            </div>
        </div>
    </section>
    <section class="espacoy" style="background: var(--bs-black);">
        <div class="container mt-3">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9">
                    <p class="phero">WHY CHOOSE US?</p>
                    <p class="phero22">Our vision is to generate, protect, transfer and share wealth with innovative solutions, latest technology and in-depth expertise for upmost security, 100% transparency and full flexibility. We support individuals to become financially independent and show them how to accelerate and pre-serve their wealth.
                        <br>
                        <br>
                        >>WE GUARANTEE 5%, 10% or 15% RETURN ON INVESTMENT EVERY MONTH.
                        <br>
                        <br>
                        >>We have a Team with over 29 years of professional education and experience in financial advisory, trading, investment and coaching.
                    </p>
                    <iframe class="video" src=@lang('videos.backoffice') frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="login-btn-wrapper text-center">
                <a href="{{ route('register') }}" class="login-btn2 col-md-12">REGISTER NOW</a>
            </div>
        </div>
    </section>
    <section class="testwel espacoy5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-container embed-responsive embed-responsive-16by9">
                        <iframe class="video embed-responsive-item" src="../../assetsWelcome/images/mudar.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></iframe>
                        <div class="login-btn-wrapper text-center">
                            <a href="https://calendly.com/nigdubai/30min" class="login-btn2 col-md-12">Book your appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-info">
                        <ul class="info-list" style="list-style-type:circle">
                            <li>Team with over 29 years of professional education and experience in financial advisory, trading, investment and coaching.</li>
                            <li>Unique market opportunity approach to reduce risks to 1% and boost performance up to 2000% p.a.</li>
                            <li>Performance will be achieved with swing trades, buying, selling and spreads generation with commodities, forex, stocks, indices. volatility. Risk will be limited to 1% with hedging by options, spreads, smart professional tools and algorithm.</li>
                            <li>Losses and trading fees are covered by the company. Out of 10 trades there might be one small loss for the company.</li>
                            <li>Top Performance over the last years was 30-59% per month, so enough money to fill liquidity pools and cover losses on back of company.</li>
                            <li>Money will be kept on certified professional brokers (no banks) that institutional clients are using as well.</li>
                            <li>Pay-ins and outs can be done via infinity club cards, E-wallets, Fiat currency over Revolut or bank account, Binance or Crypto com.</li>
                            <li>Minimum investment is USD 10 000.</li>
                            <li>Secured funds with liquid pools up to 3x the amount you initial invested.</li>
                            <li>Money and interest back guarantee, cash out or termination any time possible.</li>
                            <li>100% security and transparency with latest blockchain and AI technology, personal dashboard, daily access, monthly reports.</li>
                            <li>7 day client service support in English and German via email, phone or WhatsApp, upon requests zoom calls and personal meetings.</li>
                            <li>Attraktive Affiliate Program: 2% bonus on the investment sum the new client invested, up to 12% of the annual profits generated from recommended clients.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us" style="background: var(--bs-black);">
        <div class="container">
            <h2 class="text-white mb-5">About Us</h2>
            <div class="row text-white">
                <div class="col-md-4">
                    <div class="team-member mb-4">
                        <img src="assetsWelcome/images/nicola.png" class="img-wel mb-3">
                        <h3>Nicola Hollender</h3>
                        <p>General Manager, Senior Trader, Investor & Coach</p>
                        <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#pessoa2">View Profile</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member mb-4">
                        <img src="assetsWelcome/images/ralf.png" class="img-wel1 mb-3">
                        <h3>Ralf Hoffmann</h3>
                        <p>Senior Real Estate Investor & Coach</p>
                        <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#pessoa1">View Profile</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member mb-4">
                        <img src="assetsWelcome/images/alex.png" class="img-wel2 mb-3">
                        <h3>Alex Hacker</h3>
                        <p>Senior Wealth Manager & Coach</p>
                        <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#pessoa3">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-btn-wrapper d-flex">
            <a href="{{ route('login') }}" class="login-btn">Login</a>
            <a href="{{ route('register') }}" class="register-btn">Register</a>
        </div>
    </section>


    <!-- Modal Pessoa 1 -->
    <div class="modal fade" id="pessoa1" tabindex="-1" role="dialog" aria-labelledby="pessoa1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pessoa1Label">RALF HOFFMANN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled text-start mb-5">
                        <h5>Expertise</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Senior Real estate Investor and coach with 47 years of experience
                            <br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Bought and traded over 1550 residential and commercial units&nbsp;<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Specialized in finding deals up to 30% under market value and to sell up to 40% above market value<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Runs several companies in the area of real estate funding, portfolio management, real estate administration, evaluation and selling<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Certified Coach by Tony Robbins<br />
                        </li>
                        <li class="text-black mb-3">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Book Author<br />
                        </li>
                        <h5>Education</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Banking and Insurance<br />
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pessoa 2 -->
    <div class="modal fade" id="pessoa2" tabindex="-1" role="dialog" aria-labelledby="pessoa2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pessoa2Label">NICOLA HOLLENDER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled text-start mb-5">
                        <h5>Expertise</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Senior Professionat Trader, Investor, Consultant and Manager with 29 years of experience
                            <br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Product Development, Brand Management, Innovation,Digital Marketing, Sales, Business Development and Finance at Top Fortune 100 companies e.g. Procter & Gamble, L’Oreal, Nestle, Philips and management consultancies&nbsp;<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Digitalization of assets, blockchain and metaverse<br />
                        </li>
                        <li class="text-black mb-3">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Certified University Lecturer, Key Note Speaker and coach<br />
                        </li>
                        <h5>Education</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Bachelor (Hons) in economics, finance, asles and marketing Oxford University, UK<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Executive M.B.A<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Executive Leadership, LSB, UK<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Professional education in coaching, trading & Investment: forex, options, commodities, stocks and real estates<br />
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pessoa3" tabindex="-1" role="dialog" aria-labelledby="pessoa3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pessoa3Label">ALEX HACKER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled text-start mb-5">
                        <h5>Areas of Expertise</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Senior Investment Banker, Wealth Advisor and Coach with 48 years of experience
                            <br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Asset & Funds Manager at financial institutions and governments&nbsp;<br />
                        </li>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Relationship Manager at financial institutions<br />
                        </li>
                        <li class="text-black mb-3">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Certified Coach and Wealth Advisor<br />
                        </li>
                        <h5>Education</h5>
                        <li class="text-black mb-1">
                            <i class="la la-chevron-circle-right"></i>&nbsp;
                            Master in Law and Politics<br />
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <section class="espacoy testwel">
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
                            <p>We received an in-depth consultation how we could save taxes with a different corporate structure and how we would pay 0 taxes at the end when we found a company to Dubai. We asked NIG to set up the Company and we were very happy to obtain the residence and emirates ID and bank accounts after just a few days.
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
                            <p>At the beginning I was careful to invest since the quranteed monthly performance is really high. After a trial period for a couple of months where I constantly gained 5% ROI each month. I increased my investment to over EUR 500k. I achieve 8% ROI every month and will top up soon to over EUR 1m to gain 15% month by month. I am very satisfied and highly recommend NextGen Investment Group.<br><br><br></p>
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
                            <p>I wanted to learn how to invest in the stock market and real estates while saving taxes. I am thrilled by the option trading and real estate program at the academy of NextGen Investment Group. I just bought my first property and gain 5-10% ROI every month with option trading. On top NextGen Investment Group founded successfully and within 3 days my company in Dubai with office, business account, visa and emirates ID. I am tax free and financial independent now. Thank you very much. You changed my life completely within a couple of month.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-btn-wrapper mt-5">
                <a href="{{ route('register') }}" class="login-btn2">REGISTER NOW</a>
            </div>
        </div>
    </section>


    <!-- <section class="espacoy" style="background: var(--bs-black);">
        <div>
            <div class="container">
                <div id="meu-carrossel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <h6 class="ceo text-uppercase">@lang('leadpage.home.your')&nbsp;@lang('leadpage.home.host')&nbsp;@lang('leadpage.home.today')</h6>
                                    <img class="img-fluid border rounded-circle my-2" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" src="assetsWelcome/images/nicola.png?h=0021aac5e890c670e83cb448aee14f22" loading="auto" width="200px">
                                    <h4 class="teng fw-bold">NICOLA HOLLENDER</h4>
                                    <p class="ceo">PROFESSIONAL OPTION &amp; CRYPTO TRADER</p>
                                </div>
                                <div class="col chost" style="border-left: 1.5px solid rgba(33,37,41,0.5);">
                                    <h1 class="text-uppercase teng fw-bold" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="800" data-aos-once="true">"@lang('leadpage.home.one1') <br>@lang('leadpage.home.leader1')"</h1>
                                    <p class="phost mt-4">@lang('leadpage.home.nicola')</p>
                                    <ul class="mt-4 p-0">
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali1')</li>
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali2')</li>
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali3')</li>
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali4')</li>
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali5')</li>
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.nicolali6')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <h6 class="ceo text-uppercase">@lang('leadpage.home.your')&nbsp;@lang('leadpage.home.host')&nbsp;@lang('leadpage.home.today')</h6>
                                    <img class="img-fluid border rounded-circle my-2" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" src="assetsWelcome/images/ralf.png?h=0021aac5e890c670e83cb448aee14f22" loading="auto" width="200px">
                                    <h4 class="teng fw-bold">RALF HOFFMANN</h4>
                                    <p class="ceo">INVESTOR &amp; EXPERT CERTIFIED COACH BY TONY ROBBINS</p>
                                </div>
                                <div class="col chost" style="border-left: 1.5px solid rgba(33,37,41,0.5);">
                                    <h1 class="text-uppercase teng fw-bold" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="800" data-aos-once="true">"@lang('leadpage.home.one2') <br>@lang('leadpage.home.leader2')"</h1>
                                    <p class="phost mt-4">@lang('leadpage.home.ralf')</p>
                                    <ul class="mt-4 p-0">
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.ralfli1')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <h6 class="ceo text-uppercase">@lang('leadpage.home.your')&nbsp;@lang('leadpage.home.host')&nbsp;@lang('leadpage.home.today')</h6>
                                    <img class="img-fluid border rounded-circle my-2" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" src="assetsWelcome/images/alex.png?h=0021aac5e890c670e83cb448aee14f22" loading="auto" width="200px">
                                    <h4 class="teng fw-bold">ALEX HACKER</h4>
                                    <p class="ceo">EX TOP BANKER</p>
                                </div>
                                <div class="col chost" style="border-left: 1.5px solid rgba(33,37,41,0.5);">
                                    <h1 class="text-uppercase teng fw-bold" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="800" data-aos-once="true">"@lang('leadpage.home.one3')"</h1>
                                    <p class="phost mt-4">@lang('leadpage.home.alex')</p>
                                    <ul class="mt-4 p-0">
                                        <li class="list-group-item teng mt-0"><i class="la la-chevron-circle-right"></i> @lang('leadpage.home.alexli1')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> -->
    <!-- Start: Phone Section -->
    <!-- <section id="phone">
        <div class="special pb-5">
            <div class="container">
                <div class="col-md-12">
                    <div class="row phonemt">
                        <div class="col-md-5 col-sm-0">
                        </div>
                        <ul class="col-md-7 col-sm-12 nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link prof active fw-semibold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                    @lang('leadpage.home.cryptocurrency')
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link prof fw-semibold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                    @lang('leadpage.home.traditional currency')
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link prof fw-semibold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                    @lang('leadpage.home.concierge')
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-10 col-md-5 " style="padding-top: 0px; text-align: center; vertical-align: middle;">
                                    <img src="../assetsWelcome/images/cryptocurrency_mockup_01.png" alt="..." class="img-fluid max-img">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <div class="em_tab em_tab_0 clearfix em_active_content em-active-slide">
                                        <div class="em_tab_content">
                                            @lang('leadpage.home.cryptocurrency tab')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-5 col-sm-12" style="padding-top: 0px;text-align: center; vertical-align: middle;">
                                    <img src="../assetsWelcome/images/traditional_currencies_01.png" alt="..." class="img-fluid max-img">
                                </div>
                                <div class=" col-md-7 col-sm-12">
                                    <div class="em_tab em_tab_1 clearfix em-active-slide" style="z-index: 1; display: block; opacity: 1;">

                                        <div class="em_tab_content">
                                            @lang('leadpage.home.traditional currency tab')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-5 col-sm-12" style="padding-top: 0px;text-align: center; vertical-align: middle;">
                                    <img src="../assetsWelcome/images/concierge_mockup_01.png" alt="..." class="img-fluid max-img">
                                </div>
                                <div class=" col-md-7 col-sm-12">
                                    <div class="em_tab em_tab_2 clearfix em-active-slide" style="z-index: 1; display: block; opacity: 1;">

                                        <div class="em_tab_content">
                                            @lang('leadpage.home.concierge tab')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End: Phone Section -->
    <!-- <section class="espacoy bg-dark"> -->
    <!-- Start: 1 Row 2 Columns -->
    <!-- <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-center text-white-50">THE INFINITY CLUB CARD</h6>
                    <h1 class="text-center text-white fw-bold" style="margin-bottom: 32px; ">@lang('leadpage.home.onecard') <br>@lang('leadpage.home.pay')</h1>
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="2000" data-aos-once="true" style="color: rgb(188,188,188);">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                        <div>
                            <h4 class="text-white" class="text-center text-white">@lang('leadpage.home.card')</h4>
                            <p class="text-white-50">@lang('leadpage.home.cardtxt') <br>@lang('leadpage.home.cardtxt2')</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary text-dark d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="2300" data-aos-delay="400" data-aos-once="true" style="color: rgb(188,188,188);">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                        <div>
                            <h4 class="text-white">@lang('leadpage.home.features')</h4>
                            <p class="text-white-50">@lang('leadpage.home.featurestxt') </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: rgba(13,110,253,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="white" viewBox="0 0 16 16" class="bi bi-arrow-right-circle text-dark" data-aos="fade" data-aos-duration="3000" data-aos-delay="800" data-aos-once="true" style="color: rgb(188,188,188);">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                            </svg></div>
                        <div>
                            <h4 class="text-white">@lang('leadpage.home.success')</h4>
                            <p class="text-white-50">@lang('leadpage.home.successtxt') <br>@lang('leadpage.home.successtxt2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-keyboard="false" id="carousel-1">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="w-100 d-block" src="assetsWelcome/images/carddiamondngold.png?h=12b29874753f1b481ae1d8096dcd8409" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardclassicmember.png?h=12b29874753f1b481ae1d8096dcd8409" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardplatinumbemer.png?h=7eb2b3bbff64205c2f47993625933a9d" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assetsWelcome/images/cardplatinumelitemember.png?h=2265dd8de7d13a29d921c59d102bcb06" alt="Slide Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- </div>
    </section> -->
    <!-- End: 1 Row 2 Columns -->
    <!-- Start: 1 Row 2 Columns -->
    <!-- <section class="bg-dark">
        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col" style="text-align: center;min-height: 400px;">
                        <div class="d-flex align-items-center divimg"><img data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" src="assetsWelcome/images/Infinityclubcardwhite.png?h=2c2da8ab6a11694abaf61a424b9cad5e" width="240px" style="margin: auto;"></div>
                    </div>
                    <div class="col-md-6" style="background: #eaeaea;padding-top: 40px;padding-bottom: 40px;">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h6 class="text-black-50">@lang('leadpage.home.aboutcard')</h6>
                                <h2>@lang('leadpage.home.basic')</h2>
                                <p class="text-black-50 w-lg-50">@lang('leadpage.home.basictxt')</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-6 col-md-6 col-xl-6 text-center mx-auto">
                                <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                    <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);">
                                        <i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true"></i>
                                    </div>
                                    <div class="px-3">
                                        <h4>@lang('leadpage.home.debitcard')</h4>
                                        <p class="text-black-50">@lang('leadpage.home.load')<br>@lang('leadpage.home.load1')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-xl-6 text-center mx-auto">
                                <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                    <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);">
                                        <i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="1000" data-aos-delay="1400" data-aos-once="true"></i>
                                    </div>
                                    <div class="px-3">
                                        <h4>@lang('leadpage.home.currencies')</h4>
                                        <p class="text-black-50">@lang('leadpage.home.currenciestxt')<br>@lang('leadpage.home.currenciestxt1')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-xl-6 text-center mx-auto">
                                <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                    <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);">
                                        <i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="1000" data-aos-delay="1800" data-aos-once="true"></i>
                                    </div>
                                    <div class="px-3">
                                        <h4>ATM</h4>
                                        <p class="text-black-50">@lang('leadpage.home.atmtxt') <br>@lang('leadpage.home.atmtxt1')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-xl-6 text-center mx-auto">
                                <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                    <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);">
                                        <i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="1000" data-aos-delay="2200" data-aos-once="true"></i>
                                    </div>
                                    <div class="px-3">
                                        <h4>@lang('leadpage.home.levels')</h4>
                                        <p class="text-black-50">@lang('leadpage.home.levelstxt') <br>@lang('leadpage.home.levelstxt1')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End: 1 Row 2 Columns -->
    <!-- <section class="espacoy"> -->
    <!-- Start: 2 Rows 1+3 Columns -->
    <!-- <div class="container">
            <div class="row">
                <div class="col text-center"> -->
    <!-- <h6 class="text-black-50">@lang('leadpage.home.write')</h6> -->
    <!-- <h1 class="fw-bold">@lang('leadpage.home.club')</h1>
                    <p class="text-black-50">@lang('leadpage.home.clubtxt')<br>@lang('leadpage.home.clubtxt1')</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center mb-4">
                        <div class="bs-icon-xl bs-icon-rounded d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><i class="la la-compass text-dark iconv" style="color: rgb(204,204,204);"></i></div>
                        <div class="px-3">
                            <h4>@lang('leadpage.home.travelling')</h4>
                            <p class="text-black-50">@lang('leadpage.home.travellingtxt') <br>@lang('leadpage.home.travellingtxt1')</p>
                        </div>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center mb-4">
                        <div class="bs-icon-xl bs-icon-rounded d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><i class="la la-credit-card text-dark iconv" style="color: #adadad;"></i></div>
                        <div class="px-3">
                            <h4>@lang('leadpage.home.business')</h4>
                            <p class="text-black-50">@lang('leadpage.home.businesstxt')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="overflow: hidden;">
                    <div style="overflow: hidden;"><img class="img-fluid" src="assetsWelcome/images/cardplatinumelitemember.png?h=2265dd8de7d13a29d921c59d102bcb06"></div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center mb-4">
                        <div class="bs-icon-xl d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><i class="la la-diamond text-dark iconv" style="color: #adadad;"></i></div>
                        <div class="px-3">
                            <h4>@lang('leadpage.home.shopping')</h4>
                            <p class="text-black-50">@lang('leadpage.home.shoppingtxt') <br>@lang('leadpage.home.shoppingtxt1')</p>
                        </div>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center mb-4">
                        <div class="bs-icon-xl d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg"><i class="la la-bitcoin text-dark iconv" style="color: #adadad;"></i></div>
                        <div class="px-3">
                            <h4>@lang('leadpage.home.investment')</h4>
                            <p class="text-black-50">@lang('leadpage.home.investmenttxt')</p>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- </div>End: 2 Rows 1+3 Columns -->
    <!-- </section> -->
    <!-- <section style="background: var(--bs-black);"> -->
    <!-- Start: 1 Row 2 Columns -->
    <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-md-6" style="padding-right: 0;padding-left: 0;background: #25292F;">
                    <div style="width: 100%;overflow: hidden;"></div><img class="marginminus" src="assetsWelcome/images/imgcrypyowallet.png?h=925c358a8c09f4b3a689ca1cd6266cdd" width="1000px">
                </div>
                <div class="col-md-6" style="background: #eaeaea;padding-top: 40px;padding-bottom: 40px;">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h6 class="text-black-50">@lang('leadpage.home.aboutcard')</h6>
                            <h2 class="fw-bold">@lang('leadpage.home.basic')</h2>
                            <p class=" text-black-50 w-lg-50">@lang('leadpage.home.basictxt')</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6 col-md-6 col-xl-6 text-center mx-auto" style="background: #eaeaea;">
                            <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3"><i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true"></i></div>
                                <div class="px-3">
                                    <h4>@lang('leadpage.home.debitcard')</h4>
                                    <p class="text-black-50">@lang('leadpage.home.load')<br>@lang('leadpage.home.load1')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-6 text-center mx-auto" style="background: #eaeaea;">
                            <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);"><i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="600" data-aos-delay="1400" data-aos-once="true"></i></div>
                                <div class="px-3">
                                    <h4>@lang('leadpage.home.currencies')</h4>
                                    <p class="text-black-50">@lang('leadpage.home.currenciestxt')<br>@lang('leadpage.home.currenciestxt1')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-6 text-center mx-auto" style="background: #eaeaea;">
                            <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);"><i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="600" data-aos-delay="1800" data-aos-once="true"></i></div>
                                <div class="px-3">
                                    <h4>ATM</h4>
                                    <p class="text-black-50">@lang('leadpage.home.atmtxt') <br>@lang('leadpage.home.atmtxt1')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-6 text-center mx-auto" style="background: #eaeaea;">
                            <div class="text-center d-flex flex-column align-items-center align-items-xl-center" style="background: #eaeaea;">
                                <div class="d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3" style="color: rgb(139,139,139);"><i class="la la-check text-dark iconv" data-aos="fade" data-aos-duration="600" data-aos-delay="2200" data-aos-once="true"></i></div>
                                <div class="px-3">
                                    <h4>@lang('leadpage.home.levels')</h4>
                                    <p class="text-black-50">@lang('leadpage.home.levelstxt') <br>@lang('leadpage.home.levelstxt1')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>End: 1 Row 2 Columns -->
    <!-- </section> -->

    <!-- <section>
        <div class="espacoy" style="background: var(--bs-black);">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="text-white fw-bold">@lang('leadpage.home.cryptocurrency')</h1>
                </div>
            </div>
            Start: 1 Row 3 Columns
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-12 col-md-4 text-center cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgbitcoin.png"></div>
                        <h4 class="cryptotitle">BITCOIN</h4>
                        <h5 class="cryptotitle2">BTC</h5>
                    </div>
                    <div class="col text-center mdborder2 cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgethereum.png?h=f5f1f9f7965df8c4e4e57c348a382f7c"></div>
                        <h4 class="cryptotitle">ETHEREUM</h4>
                        <h5 class="cryptotitle2">ETH</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imglitecoin.png?h=b89842538357e06a717bea218bdf2ba4"></div>
                        <h4 class="cryptotitle">LITECOIN</h4>
                        <h5 class="cryptotitle2">LTC</h5>
                        <hr>
                    </div>
                    <div class="col-6 col-md-4 text-center mdborder cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgbitcoincash.png?h=c0a0cec49764fb3ec72f631c43b9c00f"></div>
                        <h4 class="cryptotitle">BITCOIN CASH</h4>
                        <h5 class="cryptotitle2">BCH</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center mdborder2 mdborder cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgtether.png?h=ba8664190b4e52a44443d0ae0757eb98"></div>
                        <h4 class="cryptotitle">TETHER</h4>
                        <h5 class="cryptotitle2">USDT</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center mdborder cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgbat.png?h=3aaaf9284912391267dacca774fbef77"></div>
                        <h4 class="cryptotitle">BAT</h4>
                        <h5 class="cryptotitle2">BAT</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgpaxos.png?h=ba8664190b4e52a44443d0ae0757eb98" width="100px"></div>
                        <h4 class="cryptotitle">PAXOS</h4>
                        <h5 class="cryptotitle2">PAX</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center mdborder2 cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgusdcoin.png?h=5aec0b0085d2a5ace36a76d94ec981a5" width="100px"></div>
                        <h4 class="cryptotitle">USD COIN</h4>
                        <h5 class="cryptotitle2">USDC</h5>
                    </div>
                    <div class="col-6 col-md-4 text-center cryptocolfix smcryptocolfix">
                        <div class="cryptoicondiv"><img src="assetsWelcome/images/imgeos.png?h=0f74948ab93b7f6ceb0368ac9f809ebe"></div>
                        <h4 class="cryptotitle">EOS</h4>
                        <h5 class="cryptotitle2">EOS</h5>
                    </div>
                </div>
            </div>
            End: 1 Row 3 Columns
        </div>
    </section> -->
    <!-- <section>
        <div class="espacoy" style="background: var(--bs-black)"> -->
    <!-- Start: 1 Row 3 Columns -->
    <!-- <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="text-white fw-bold">@lang('leadpage.home.fiatcurrency')</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 text-center cryptocolfix smcryptocolfix"><img src="assetsWelcome/images/dolar.png?h=8051cf1a6d4865f517fba7d774233d4c" width="80px">
                        <h4 class="cryptotitle mt-3">US Dollar</h4>
                        <h5 class="cryptotitle2">USD</h5>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 text-center mdborder2 cryptocolfix smcryptocolfix"><img src="assetsWelcome/images/euro.png?h=1a5b568743c08ff130a7ada682035523" width="80px">
                        <h4 class="cryptotitle mt-3">EURO</h4>
                        <h5 class="cryptotitle2">EUR</h5>
                        <h1></h1>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 text-center cryptocolfix smcryptocolfix"><img src="assetsWelcome/images/libra.png?h=1a5b568743c08ff130a7ada682035523" width="80px">
                        <h4 class="cryptotitle mt-3">BRITISH POUND</h4>
                        <h5 class="cryptotitle2">GBP</h5>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 text-center cryptocolfix mdborder3 smcryptocolfix"><img src="assetsWelcome/images/yen.png?h=9b8e7291c162da2f39bd953409408561" width="80px">
                        <h4 class="cryptotitle mt-3">YEN</h4>
                        <h5 class="cryptotitle2">JPY</h5>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mdborder2 cryptocolfix mdborder3 smcryptocolfix"><img src="assetsWelcome/images/yuan.png?h=9b8e7291c162da2f39bd953409408561" width="80px">
                        <h4 class="cryptotitle mt-3">YUAN</h4>
                        <h5 class="cryptotitle2">CNY</h5>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 text-center mt-sm-auto cryptocolfix mdborder3">
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.fca')</h6>
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.live')</h6>
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.nearly')</h6>
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.rates')</h6>
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.fund')</h6>
                        <h6 class="cryptotitle3">✓ @lang('leadpage.home.customer')</h6>
                    </div>
                </div>
            </div>End: 1 Row 3 Columns
        </div>
    </section> -->
    <!-- <section>
        <div>
            Start: Features Small Icons Color
            <div class="container border rounded border-0 p-4 p-lg-5 py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 class="fw-bold">@lang('leadpage.home.reasons')</h2>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-briefcase text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.quick')<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.quicktxt')<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-list-alt text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.transparent')<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.transparenttxt')<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-bar-chart text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.better')&nbsp;<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.bettertxt')<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs- bs-icon-semi-white d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-binoculars text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.discounts')&nbsp;<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.discountstxt')<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-sun-o text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.earn')&nbsp;<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.earntxt')<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon"><i class="la la-calendar text-dark iconv" data-aos="fade" data-aos-duration="800" data-aos-delay="200"></i></div>
                            <div class="px-3">
                                <h4 class="text-dark">@lang('leadpage.home.spend')<br></h4>
                                <p class="text-black-50">@lang('leadpage.home.spendtxt')<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>End: Features Small Icons Color
        </div>
    </section> -->
    <!-- Start: Footer Dark -->
    <footer class="bg-dark">
        <div class="espacoy">
            <!-- Start: 1 Row 1 Column -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <img src="../../assetsWelcome/images/NIG.png" width="100%" style="max-width: 300px;">
                        <p class="text-center text-white"></p>
                        <div class="d-flex align-items-lg-center text-white mb-2"><a class="d-block footerlink" href="#" data-bs-target="#" data-bs-toggle="modal">Since 2017 the NEXTGEN Investment Group revolutionizes wealth management with a team of high-performing, experienced financial advisors.</a></div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <h5 class="text-start text-white mt-3">Additional Pages</h5>
                        <div class="d-flex flex-wrap">
                            <div class="my-div d-inline-block align-items-lg-center mb-3 mt-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com">Home</a></div>
                            <div class="my-div d-inline-block align-items-lg-center mb-3 mt-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/asset-acceleration/">Assets</a></div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/works/academy/">Academy</a></div>
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/blog/">Insights</a></div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/testimonials-1/">Testimonials</a></div>
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/contact-us/">Contact</a></div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="{{ url('/') }}">Login</a></div>
                            <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" href="https://phpstack-938220-3402762.cloudwaysapps.com/disclaimer-2/">Disclaimer</a></div>
                        </div>
                        <h5 class="text-start text-white"></h5>
                        <h5 class="text-start text-white"></h5>
                    </div>
                    <div class="col-md-3">
                        <p class="text-center text-white"></p>
                        <h5 class="text-start text-white mb-4">Language</h5>
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flaguk.png?h=0c7390cbfbfc9edfeaa340414b8fcccf" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/en">@lang('leadpage.btn.english')</a></div>
                        <!-- <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagspa.png?h=82b1ec4cf037271f6fac3cb3a83072e5" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/es">@lang('leadpage.btn.spanish')</a></div> -->
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagger.png?h=4e906449aca319bcf7fed73fb806e14f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/de">@lang('leadpage.btn.german')</a></div>
                        <!-- <div class="d-flex align-items-lg-center"><img class="me-2" src="../../assetsWelcome/images/flagfr.png?h=af5123cb6532b4278a2cdb445e0a130f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/fr">@lang('leadpage.btn.french')</a></div> -->
                        <h5 class="text-start text-white"></h5>
                        <h5 class="text-start text-white"></h5>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-row align-items-center">
                            <img src="../../assetsWelcome/images/nicol.jpg" alt="Descrição da imagem" style="border-radius: 50%; width: 20%; height: 60px;">
                            <p class="text-white ms-3 mb-0">@nig.dubai</p>
                        </div>
                        <a href="https://www.instagram.com/nig.dubai4u/?igshid=ZDdkNTZiNTM%3D">
                            <button class="btn btn-primary btn-block mt-3">Follow on Instagram</button>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="social-media mt-5 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="left text-white">
                        <h6>@lang('leadpage.footer.copyright')
                            by NEXTGEN Investment Group. All rights reserved</h6>
                    </div>
                    <div class="right">
                        <ul class="d-flex flex-wrap">
                            <li><a href="https://www.facebook.com/profile.php?id=100090615963588&mibextid=ZbWKwL"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="https://twitter.com/nigdubai?t=160-ONDdkxFBeQks_QYUOQ&s=09"><i class="fab fa-twitter twitter-icon"></i></a></li>
                            <li><a href="https://www.instagram.com/nig.dubai4u/?igshid=ZDdkNTZiNTM%3D"><i class="fab fa-instagram ig-icon"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/nig-dubai.com/"><i class="fab fa-linkedin-in linkedin-icon"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=971585221677&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp wa-icon"></i></a></li>
                            <li><a href="https://www.tiktok.com/@nigdubai"><i class="fab fa-tiktok tiktok-icon"></i></a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <!-- End: 1 Row 1 Column -->
        </div>
    </footer>
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
                            <h4 class="modal-title">Waiting For Content</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bgmodal">
                            <div class="col-md-12 text-center mb-5">
                                <h1>PAY YOUR WAY, IN STYLE</h1>
                                <p class="text-black-50 plimit mb-4">
                                    A card that allows you to spend digital and traditional currencies seamlessly anywhere in the world.
                                    Spend 150+ currencies at millions of retailers and service providers, in store or online.<br />
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
                                <a class="btn btn-dark d-block orderbtn mt-5" role="button" href="{{ route('register') }}">@lang('leadpage.accounts.freedom.btn')</a>
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
    </section>
    <!-- End: Modais -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js?h=db5f9301c4983e5b4f628e197406cbdd"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
    <script>
        $('.galeria').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 5,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector(".whatsapp-fixo").style.opacity = "1";
            } else {
                document.querySelector(".whatsapp-fixo").style.opacity = "0";
            }
        }
    </script>

    <script>
        // Código para fazer o botão Proven Expert seguir a página
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector(".provenexpert-fixo").style.opacity = "1";
            } else {
                document.querySelector(".provenexpert-fixo").style.opacity = "0";
            }
        }
    </script>
    <script>
        // Código para fazer a imagem fixa seguir a página
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector(".imagem-fixa").style.opacity = "1";
            } else {
                document.querySelector(".imagem-fixa").style.opacity = "0";
            }
        }
    </script>
</body>


<script>
    var myCarousel = document.querySelector('#meu-carrossel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 8000, // tempo em milissegundos entre as mudanças de imagem
        wrap: true, // reinicia o carrossel do começo após a última imagem
        pause: false // pausa a mudança de imagem ao passar o mouse por cima
    })
</script>
<script>
    var counter1 = document.getElementById('counter1');
    var counter2 = document.getElementById('counter2');
    var counter3 = document.getElementById('counter3');
    var counter4 = document.getElementById('counter4');

    function increment(i, max, element, symbol) {
        if (i > max) return;
        setTimeout(function() {
            element.innerText = symbol + Math.round(i);
            increment(i + (max / 100), max, symbol, element);
        }, 10)
    }

    increment(0, 25, "+", counter1);
    increment(0, 146, "+", counter2);
    increment(0, 180, "+", counter3);
    increment(0, 400, "%", counter4);
</script>


</html>