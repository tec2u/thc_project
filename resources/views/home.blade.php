@extends('layouts.header')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>


<script>
    $(function() {
        'use strict'
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')
        var salesChartData = {
            labels: {
                !!$label!!
            },
            datasets: [{
                    label: 'Balance Entries',
                    backgroundColor: 'rgba(255,160,25,0.9)',
                    borderColor: 'rgba(255,160,25,0.8)',
                    pointRadius: false,
                    pointColor: '#ffa019',
                    pointStrokeColor: 'rgba(255,160,25,1)',
                    pointHighlightFill: '#ffa019',
                    pointHighlightStroke: 'rgba(255,160,25,1)',
                    data: {
                        !!$data!!
                    }
                },
                {
                    label: 'Balance Out',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: {
                        !!$datasaida!!
                    }
                }
            ]
        }
        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            }
        }
        var salesChart = new Chart(
            salesChartCanvas, {
                type: 'line',
                data: salesChartData,
                options: salesChartOptions
            }
        )
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator'],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        $('#world-map-markers').mapael({
            map: {
                name: 'usa_states',
                zoom: {
                    enabled: true,
                    maxLevel: 10
                }
            }
        })
    })

    $(function() {

        $('#carouselEcommerc img:eq(0)').addClass("ativo").show();
        setInterval(slide, 5000);

        function slide() {

            //Se a proxima imagem existir
            if ($('.ativo').next().length) {

                $('.ativo').removeClass("ativo").next().addClass("ativo");

            } else { //Se for a ultima img do carrosel

                $('.ativo').removeClass("ativo");
                $('#carouselEcommerc img:eq(0)').addClass("ativo");

            }

        }
    });
</script>

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
</style>

<main id="main" class="main mt-0">
    @include('flash::message')
    <section id="home" class="content">
        <div class="fade">
            <div class="container-fluid">
                <section class="container-fluid  bg-white p-0 radius-15" style="backdrop-filter: blur(0px);filter: brightness(120%) grayscale(0%) saturate(120%);" id="herosection">
                    <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="0.5" style="width: 100%;height: 50vh;background: linear-gradient(rgba(0,0,0,0.83), rgba(0,0,0,0.78)), url({{ asset('/images/nolimitslogo.png')}}) center / cover no-repeat;">
                        <div class="container h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-lg-12 col-xl-12 d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                                    <div class="text-center" style="margin: 0 auto;">
                                        <p data-aos="fade" data-aos-duration="1500" data-aos-delay="400" data-aos-once="true" class="phero">@lang('home.home1.li3')</p>
                                        <h6 class="text-uppercase fw-bold mb-3 hhero hherosm" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="800" data-aos-once="true">
                                            THE <br>HEALING COMPANY</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container-fluid mt-4">
                <div class="container-fluid  bg-white p-4 radius-15">
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
            </div>
            <div class="container-fluid mt-4">
                <div class="container-fluid  bg-white p-4 radius-15">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid imagehome mt-5">
            <div class="text-center">
                <h2 class="text-dark mb-4 mt-4 about-txt">@lang('leadpage.client.li1')</h2>
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
        </div>
        <div class="container-img imagehome">
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/accenture.png" alt="Imagem 1">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/bbc.png" alt="Imagem 2">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/cw.png" alt="Imagem 3">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/forbes.png" alt="Imagem 4">
            </div>
        </div>
        <div class="container-img imagehome">
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/nbc.png" alt="Imagem 5">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/redner.png" alt="Imagem 3">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/sp_excellence.png" alt="Imagem 4">
            </div>
            <div class="image imgpad">
                <img src="../../assetsWelcome/images/top100.png" alt="Imagem 5">
            </div>
        </div>
        <section class="espacoy1 testwel mt-5">
            <div class="container-fluid">
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
                                    <br>@lang('leadpage.test.li4').<br><br><br>
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
                <div class="login-btn-wrapper my-3">
                    <a href="{{ route('register') }}" class="login-btn2">@lang('leadpage.why.li5')</a>
                </div>
            </div>
        </section>
        </div>
        </div>
    </section>
    <footer class="bg-dark">
        <div class="espacoy6">
            <!-- Start: 1 Row 1 Column -->
            <div class="container foothome">
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center">
                        <img src="{{ asset('images/nolimitslogo.png') }}" width="100%" style="max-width: 300px;">
                        <p class="text-center text-white"></p>
                        <div class="d-flex align-items-lg-center text-white mb-2"><a class="d-block footerlink" href="#" data-bs-target="#" data-bs-toggle="modal">@lang('leadpage.footer1.li1')</a></div>
                        <div class="my-div d-inline-block align-items-lg-center mb-3"><a class="d-block footerlink" style="font-size: 13px;" href="https://phpstack-938220-3402762.cloudwaysapps.com/disclaimer-2/">@lang('leadpage.footer1.li2')</a>
                        </div>
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
                <hr>
                <div class="social-media mt-5 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="left text-white">
                        <p style="font-size: 10px;">@lang('leadpage.footer.copyright')
                            by NEXTGEN Investment Group. All rights reserved</p>
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
</main>


<!-- <script>
        if (screen.width > 810) {
            var widthImage = 810;
            var heightImage = widthImage / 1.787;
        } else {
            var widthImage = screen.width;
            var heightImage = screen.width / 1.787;
        }
        setTimeout(() => {
            Swal.fire({
                "title": "",
                "text": "",
                "width": widthImage,
                "heightAuto": true,
                "padding": "1.25rem",
                "showConfirmButton": true,
                "showCloseButton": false,
                "timerProgressBar": false,
                "customClass": {
                    "container": null,
                    "popup": null,
                    "header": null,
                    "title": null,
                    "closeButton": null,
                    "icon": null,
                    "image": null,
                    "content": null,
                    "input": null,
                    "actions": null,
                    "confirmButton": null,
                    "cancelButton": null,
                    "footer": null
                },
                "imageUrl": "{{ $url_image_popup }}",
                "imageWidth": widthImage,
                "imageHeight": heightImage,
                "imageAlt": "",
                "animation": false
            });
        }, 7000);
    </script> -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../../assetsWelcome/slick-1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
<script>
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: ['Year 1', 'Year 2', 'Year 3', 'Year 4', 'Year 5', 'Year 6', 'Year 7', 'Year 8', 'Year 9',
                'Year 10'
            ],
            datasets: [{
                data: {
                    {
                        json_encode($data_graphic)
                    }
                },
                label: "Money",
                borderColor: "#3e95cd",
                fill: false
            }, ]
        },
    });
</script>


@endsection
