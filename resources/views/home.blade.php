@extends('layouts.header')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script>
    function FunctionCopy1() {

        var copyText = document.getElementById("landing");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }

    function FunctionCopy2() {

        var copyText = document.getElementById("referral");


        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        navigator.clipboard.writeText(copyText.value);

        // alert("Copied the text: " + copyText.value);
    }
</script>

<style>
    .txtcolor {
        color: #fff;
    }

    .video {
        aspect-ratio: 16 / 9;
        width: 70%;
        display: block;
        margin: 0 auto;
    }

    .img-home {
        max-width: 80%;
    }


    .card_text {
        color: #fff;
    }

    .section-info {
        display: none;
    }

    .testwel {
        position: relative;
        padding-right: 7.5px;
        padding-left: 7.5px;
        margin-right: auto;
        margin-left: auto;
    }

    .icondash {
        width: 100%;
    }

    .foothome {
        max-width: 1550px !important;
    }

    #myChart {
        width: 702px !important;
        height: 347px !important;
        background-color: white !important;
    }

    @media (max-width: 500px) {
        .hhero {
            font-size: 2em;
            line-height: 93%;
            color: rgb(255, 255, 255);
            font-weight: 900;
        }
    }

    @media (max-width: 1730px) {
        #myChart {
            width: 590px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1700px) {
        #myChart {
            width: 600px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1522px) {
        #myChart {
            width: 500px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1500px) {
        #myChart {
            width: 462px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 1300px) {
        #myChart {
            width: 410px !important;
            height: 335px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 867px) {
        #myChart {
            width: 350px !important;
            height: 355px !important;
            background-color: white !important;
        }
    }

    @media (max-width: 768px) {
        #myChart {
            width: 100% !important;
            height: 355px !important;
            background-color: white !important;
        }
    }

    .image {
        flex-basis: 20%;
        padding: 5px;
    }

    .radius-15 {
        border-radius: 15px;
        overflow: hidden;
    }

    .image img {
        max-width: 100%;
        height: auto;
    }

    .container-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;

    }

    .imagehome {
        padding-right: 7.5px;
        padding-left: 7.5px;
        margin-right: auto;
        margin-left: auto;
    }

    .bg-banner {
        width: 100%;
        height: 50vh;
        background: center / cover no-repeat;
        background-size: 30%;
    }

    .w-30 {
        width: 30%;
    }

    .card-total-values {
        position: relative;
        /* Necessário para que o ::before fique sobre o elemento */
        z-index: 0;
    }

    .card-total-values::before {
        background-image: url(/images/nolimitslogo.png);
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: 72%;
        background-position: 175%;
        opacity: 0.3;
        z-index: -1;
        background-repeat: no-repeat;
        filter: grayscale(1);
    }

    body {
        font-family: Arial, sans-serif;
    }

    .text-section-styled-1 {
        color: #ffffffd6;
        font-size: 17px;
        font-weight: 500;
    }

    .icon-section-styled-1 {
        margin-bottom: 15px;
        color: #ffff;
        font-size: 80px;
    }

    .bg-carousel-img {
        height: 500px !important;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
</style>

<main id="main" class="main mt-0">
    @include('flash::message')
    <section id="home" class="content">
        <div class="fade">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <div class="container-fluid">
                <section class="container-fluid bg-white p-0 radius-15" id="herosection">
                    <div class="carousel">
                        <div class="carousel-item">
                            <div class="bg-carousel-img" style="background-image: url({{ asset('images/sheik-seed.png') }});">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bg-carousel-img" style="background-image: url({{ asset('images/nolimitslogo.png') }});">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container-fluid">
                <div class="mt-4 d-flex flex-wrap">
                    <div class="card-total-values mb-3 w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>TOTAL</h2>
                            <div>invested</div>
                        </div>
                        <div>
                            <h2>89</h2>
                        </div>
                    </div>
                    <div class="card-total-values mb-3 w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>TOTAL</h2>
                            <div>profit</div>
                        </div>
                        <div>
                            <h2>89</h2>
                        </div>
                    </div>
                    <div class="card-total-values mb-3 w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>TOTAL</h2>
                            <div>withdrawal</div>
                        </div>
                        <div>
                            <h2>89</h2>
                        </div>
                    </div>
                    <div class="card-total-values w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>TOTAL</h2>
                            <div>commission</div>
                        </div>
                        <div>
                            <h2>89</h2>
                        </div>
                    </div>
                    <div class="card-total-values w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>CAREER</h2>
                        </div>
                        <div>
                            <h2>ABC</h2>
                        </div>
                    </div>
                    <div class="card-total-values w-30 mr-auto bg-white p-4 radius-15 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>CAREER</h2>
                            <div>PIN</div>
                        </div>
                        <div>
                            <h2>1</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-between">
                    <div class="bg-white p-4 radius-15" style="width: 49%;">
                        <div class="mb-2">
                            <h2 class="m-0">Benefits</h2>
                            <span>of Using THC</span>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9" style="display: flex;
                        justify-content: center;
                        align-items: center;">
                            <video class="video1 embed-responsive-item" controls src="{{ asset('videos/video-thc.mp4') }}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;" allowfullscreen></video>
                        </div>
                    </div>
                    <div class="bg-white p-4 radius-15" style="width: 49%;">
                        <div class="section-info2">
                            <ul class="info-list" style="">
                                <li>Tetrahydrocannabinol (THC) is one of the primary compounds found in cannabis, known for its psychoactive properties. Beyond its recreational use, THC has several potential health benefits that are increasingly recognized in the medical community. Here are some of the key benefits:</li>
                                <li>
                                    Pain Relief: THC is effective in alleviating chronic pain, including neuropathic pain. It activates pathways in the central nervous system that block pain signals from being sent to the brain1.
                                    Nausea and Vomiting Reduction: THC has been used to reduce nausea and vomiting, particularly in patients undergoing chemotherapy. FDA-approved medications like Marinol contain synthetic THC for this purpose2.
                                </li>
                            </ul>
                            <ul class="info-list section-info" style="">
                                <li>Appetite Stimulation: THC can help stimulate appetite, which is beneficial for patients suffering from conditions like HIV/AIDS or cancer, where appetite loss is a common issue3.
                                    Muscle Spasms and Spasticity: THC has shown effectiveness in reducing muscle spasms and spasticity, particularly in conditions like multiple sclerosis4.</li>
                                <li>Sleep Aid: THC can improve sleep quality and help with insomnia by reducing the time it takes to fall asleep and increasing the duration of sleep.</li>
                                <li>Mental Health Benefits: Some studies suggest that THC can help alleviate symptoms of PTSD, anxiety, and depression when used appropriately.</li>
                                <li>While THC offers these benefits, it is important to use it responsibly and under medical supervision to avoid potential side effects and dependency issues.</li>
                            </ul>
                        </div>
                        <button class="login-btn2 col-md-12 text-center" style="border-color: #fff;" id="ler-mais">@lang('leadpage.new.btnli')</button>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <div class="container-fluid mt-4">
            <section class="container-fluid bg-default p-4 radius-15 text-white">
                <div class="w-100 text-center">
                    <h2>Taking cultivation to the next level</h2>
                </div>
                <div class="d-flex mt-5">
                    <div class="w-100 d-flex flex-column align-items-center px-3">
                        <i class="fa-solid fa-image icon-section-styled-1"></i>
                        <h5>State of the Art</h5>
                        <div class="text-center text-section-styled-1">Cutting-edge technology and state-of-the-art equipment powering our indoor greenhouse operation.</div>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center px-3">
                        <i class="fa-solid fa-chart-simple icon-section-styled-1"></i>
                        <h5>Seed to Sale</h5>
                        <div class="text-center text-section-styled-1">Digital inventory control systems track cultivation, processing, and sales.</div>
                    </div>
                    <div class="w-100 d-flex flex-column align-items-center px-3">
                        <i class="fa-solid fa-seedling icon-section-styled-1"></i>
                        <h5>Unspoiled Nature</h5>
                        <div class="text-center text-section-styled-1">Pristine wilderness location, clean water and pure air, perfect for cultivation</div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid mt-4">
            <section class="container-fluid bg-white p-4 radius-15 text-white">
                <div class="d-flex">
                    <div class="w-100 p-3 text-center position-relative">
                        <div>
                            <h2>HOW</h2>
                            <div>does it work?</div>
                        </div>
                        <div>
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                        </div>
                        <div class="position-absolute w-100 bottom-0 left-0">
                            <a class="btn btn-primary w-100 p-2">BUY NOW</a>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('images/plants-1.webp') }}" alt="" class="w-100 h-100 rounded-circle">
                    </div>
                </div>
            </section>
        </div>
        </div>
        </div>
    </section>
    <footer class="container-fluid mt-4">
        <div class="container-fluid bg-default p-4 radius-15 text-white">
            <!-- Start: 1 Row 1 Column -->
            <div class="container foothome">
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center">
                        <img src="{{ asset('images/nolimitslogo.png') }}" width="100%" style="max-width: 300px;" class="img-destac">
                        <p class="text-center text-white"></p>

                    </div>
                    <div class="col-md-3 mx-auto">
                        <p class="text-center text-white"></p>
                        <h5 class="text-start text-white mb-4">@lang('leadpage.footer1.li4')</h5>
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flaguk.png?h=0c7390cbfbfc9edfeaa340414b8fcccf" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/en">@lang('leadpage.btn.english')</a></div>
                        <!-- <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagspa.png?h=82b1ec4cf037271f6fac3cb3a83072e5" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/es">@lang('leadpage.btn.spanish')</a></div> -->
                        <div class="d-flex align-items-lg-center mb-2"><img class="me-2" src="../../assetsWelcome/images/flagger.png?h=4e906449aca319bcf7fed73fb806e14f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/de">@lang('leadpage.btn.german')</a></div>
                        <!-- <div class="d-flex align-items-lg-center"><img class="me-2" src="../../assetsWelcome/images/flagfr.png?h=af5123cb6532b4278a2cdb445e0a130f" width="20px" height="20px"><a class="d-block footerlink" href="/setlocale/fr">@lang('leadpage.btn.french')</a></div> -->
                    </div>
                </div>
            </div>
            <!-- End: 1 Row 1 Column -->
        </div>
    </footer>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .carousel-item {
        text-align: center;
        padding: 0;
        border-radius: 5px;
        margin: 5px;
        height: 100%;
    }

    .carousel-item img {
        width: 100%;
        border-radius: 5px;
        max-width: 500px;
    }
</style>
<script>
    $(document).ready(function() {
        $('.carousel').slick({
            autoplay: false, // Ativa a rotação automática
            autoplaySpeed: 3000, // Tempo de exibição de cada slide (3 segundos)
            dots: true, // Adiciona indicadores de navegação
            arrows: false, // Desativa os botões de navegação
            infinite: true, // Habilita a rotação contínua
            speed: 500, // Velocidade da transição
        });
    });

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
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
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


@endsection
