<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>EHS - Eco Healing Solutions</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        video {
            display: block;
            height: 150%;
            left: 0;
            object-fit: cover;
            position: fixed;
            top: -25%;
            width: 100%;
            z-index: -1;
        }
    </style>
</head>

<body class="is-preload">
    <!-- Header -->
    <header id="header">
        <h1><img src="images/logo2.png" style="height: 100%" /></h1>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Intro</a></li>
                <li><a href="{{ route('welcome') }}#contact">Contact</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('login') }}">Log In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <video src="videos/video-banner.mp4" autoplay loop id="vid" muted></video>
    <script>
        document.getElementById("vid").play();
    </script>
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background-color: rgba(0, 0, 0, 0.5)">
            <header>
                <h2>
                    We provide the best sustainable strategy to grow up your WEALTH
                </h2>
            </header>
            <p>
                We are is the best option for your company to start receiving passive
                income. Instant Payments, Transparency, Sustainability
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>


    <!-- One -->
    <section class="main style3 secondary pb-5">
        <div class="content">
        <header>
                <h2>Story Behind the Company</h2>
            </header>
            <p>Eco Healing Solutions was founded with a clear mission: to restore ecological balance and create a sustainable future. Rather than owning algae farms, the company partners with credible sellers of verified carbon credits. By sourcing high-quality credits from environmentally impactful projects globally, Eco Healing Solutions bridges the gap between these projects and buyers in compliance markets, such as the UN ETS (European Union Emissions Trading System), and other environmentally conscious entities.
                Through this model, the company provides businesses and governments with verified carbon credits, enabling them to meet their sustainability targets while fostering impactful change. This pivot reflects the company's commitment to making a tangible difference in the fight against climate change, leveraging strategic partnerships and Rajiv Malhotra's expertise to drive innovation in the carbon trading market.
            </p>
            <header>
                <h2>Mission</h2>
            </header>
            <p>"To lead the global carbon credit market by connecting credible projects with responsible buyers, ensuring financial returns and environmental impact."
            </p>
            <header>
                <h2>Vision</h2>
            </header>
            <p>"To become the world’s most trusted carbon credit trader, accelerating the transition to a carbon-neutral future through innovation, transparency, and collaboration."
            </p>
            <header>
                <h2>Values</h2>
            </header>
            <ul>
                <li>
                    <p>Credibility: Ensuring all credits traded meet global verification standards.
                    </p>
                </li>
                <li>
                    <p>Sustainability: Supporting projects that create real, measurable environmental impact.
                    </p>
                </li>
                <li>
                    <p>Profitability with Purpose: Delivering returns while addressing global climate challenges.
                    </p>
                </li>
                <li>
                    <p>Integrity: Building trust through transparency in every transaction.
                    </p>
                </li>
                <li>
                    <p>Leadership: Innovating carbon credit trading to meet future demands.
                    </p>
                </li>
            </ul>
            <header>
                <h2>Business Model</h2>
            </header>
            <p>Eco Healing Solutions purchases verified carbon credits from trusted global sources, including nature-based solutions and industrial carbon capture projects. These credits are sold to compliance buyers such as corporations and governments in markets like the UN ETS, where demand for high-quality credits is rising.
            </p>
            <p>The company benefits from high margins due to careful sourcing strategies and the rising market value of carbon credits, with annual returns reaching up to 200%. This model allows Eco Healing Solutions to remain agile and impactful in a dynamic market.</p>
            <header>
                <h2>Rajiv Malhotra: A Visionary Leader in Sustainability and Innovation
                </h2>
            </header>
            <div style="display: flex; justify-content: space-between;">
            <p style="width: 50%;">Rajiv Malhotra is a seasoned entrepreneur with a diverse portfolio of leadership roles across industries, from HR consulting and genetic testing to real estate and sustainability. As the CEO of Eco Healing Solutions, Rajiv channels his extensive expertise into advancing the carbon credit trading market.
                With nearly two decades of experience in carbon credits, Rajiv was an early adopter in the field, recognizing the transformative potential of trading verified offsets to combat climate change. His career highlights include:
            </p>
            <div style="width: 50%;margin-bottom: 20px"><img src="{{ asset('images/ceo-photo.jpg') }}" alt="" style="height: 400px;"></div>
            </div>
            
                    <p>Business Development Manager at Fluid HR Consulting Services, delivering innovative HR solutions.</br>
                    CEO of DNA Testing Centres of Canada, where he spearheads advancements in genetic testing for preventative healthcare.</br>
                    Partner at Mexicasa Real Estate Group, leveraging over a decade of experience in Canadian construction and real estate to offer turnkey investments in Mexico.</br>
                    Co-founder of the Sifarish Network, a premier platform supporting professional growth among the South Asian business community in Canada.</br></br>
                    Rajiv’s academic foundation in Economics from the University of Alberta, combined with fluency in English, Punjabi, and Hindi, enhances his ability to navigate global markets. His analytical mindset, cultural adaptability, and passion for sustainable solutions position him as a visionary leader driving Eco Healing Solutions’s mission to foster environmental impact and financial growth.
                    </p>
              
            <p>
            </p>
       
        </div>
    </section>

    <!-- Two -->
   
  



    <footer id="footer">
        <!-- Icons -->
        <ul class="icons">
            <li>
                <a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
            </li>
            <li>
                <a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
            </li>
            <li>
                <a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
            </li>
            <li>
                <a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a>
            </li>
            <li>
                <a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a>
            </li>
            <li>
                <a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a>
            </li>
        </ul>

        <!-- Menu -->
        <ul class="menu">
            <li>&copy;</li>
            <li>Eco Healing Solutions</li>
        </ul>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
