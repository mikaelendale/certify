<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Sasly - Multipurpose Landing Page HTML Template</title>
    <!--====== Favicon Icon ======-->
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="common/fonts/flaticon/flaticon_sasly.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="common/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="common/css/plugins/bootstrap.min.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="common/css/plugins/slick.css">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="common/css/plugins/magnific-popup.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="common/css/plugins/aos.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="common/css/default.css">
    <!--====== Common Style css ======-->
    <link rel="stylesheet" href="common/css/common_style.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="software-website">
    <!--======  Smooth Wrapper  ======-->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!--======  Main  ======-->
            <main>
                <!--======  Start Hero Section  ======-->
                <section class="hero-ss bg_cover" style="background-image: url(assets/images/hero/hero_bg1.png);">
                    <!--===  Hero Wrapper  ===-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-center">
                                    <span class="sub-heading">Get Certified with LaloDev</span>
                                    <h1 class="text-anm">Advance Your <br> Skills Today</h1>
                                    <p data-aos="fade-up" data-aos-duration="1000">
                                        LaloDev learning hub helps you validate your expertise with industry-recognized
                                        certifications.
                                        Gain credibility and take your career to the next level.
                                    </p>
                                    <div class="hero-button" data-aos="fade-up" data-aos-duration="1200">
                                        @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/dashboard') }}"
                                                    class="theme-btn text-white style-one">Dashboard
                                                    </href=>
                                                @else
                                                    <a href="{{ url('login') }}"
                                                        class="theme-btn text-white style-one">Login</a>
                                                @endauth
                                        @endif
                                        <a href="https://t.me/lalo_ceo" class="theme-btn style-two">contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--======  End Hero Section  ======-->
                <!--====== Start Features Section  ======-->
                <section class="features-ss pt-220 pb-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--===  Section Title  ===-->
                                <div class="section-title text-center mb-70">
                                    <h2 class="text-anm">Revolutionizing Search AI-Powered <br>
                                        Software Solutions</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--====== End Features Section  ======-->
                <!--====== Start Features Section  ======-->
                <section class="features-two-ss pb-80">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!--===  Section Content Box  ===-->
                                <div class="section-content-box mb-50">
                                    <!--===  Section Title  ===-->
                                    <div class="section-title">
                                        <h2 class="mb-20 text-anm">Take our courses and get certified today</h2>
                                    </div>
                                    <p data-aos="fade-up" data-aos-duration="1200">Enhance your skills with our
                                        expert-led courses designed for all levels.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!--===  Feature Image Box  ===-->
                                <div class="feature-image-box mb-50" data-aos="fade-left" data-aos-duration="1700">
                                    <img src="images/certificate.png" alt="Features Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--====== End Features Section  ======-->
                <!--====== Start Testimonial Section =======-->
                {{-- <section class="testimonial-ss bg_cover  pt-120 pb-120"
                    style="background-image: url(assets/images/bg/testimonial-bg1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Section Title  ===-->
                                <div class="section-title text-center mb-70">
                                    <h2 class="text-anm">We Have 1530+ Reviews <br>
                                        Let’s Explore Clients Feedback </h2>
                                </div>
                            </div>
                        </div>
                        <!--=== Testimonial Slider Two  ===-->
                        <div class="testimonial-slider">
                            <!--=== Testimonial Item  ===-->
                            <div class="sasly-testimonial-item style-two">
                                <div class="testimonial-thumbnail">
                                    <img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial Thumbnail">
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-thumb-company d-flex mb-30">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/quote.png" alt="Author Image">
                                        </div>
                                        <div class="author-company">
                                            <img src="assets/images/testimonial/client1.png" alt="Author Company">
                                        </div>
                                    </div>
                                    <p>"Working with Your Agency has been game-changer
                                        for the our business. Their strategic insights innovative solutions way have
                                        propelled growth satisfied."</p>
                                    <div class="author-info-box">
                                        <div class="author-info">
                                            <h4>Ricardo F. Bowers</h4>
                                            <span class="position">CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Testimonial Item  ===-->
                            <div class="sasly-testimonial-item style-two">
                                <div class="testimonial-thumbnail">
                                    <img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial Thumbnail">
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-thumb-company d-flex mb-30">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/quote.png" alt="Author Image">
                                        </div>
                                        <div class="author-company">
                                            <img src="assets/images/testimonial/client1.png" alt="Author Company">
                                        </div>
                                    </div>
                                    <p>"Working with Your Agency has been game-changer
                                        for the our business. Their strategic insights innovative solutions way have
                                        propelled growth satisfied."</p>
                                    <div class="author-info-box">
                                        <div class="author-info">
                                            <h4>Ricardo F. Bowers</h4>
                                            <span class="position">CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Testimonial Item  ===-->
                            <div class="sasly-testimonial-item style-two">
                                <div class="testimonial-thumbnail">
                                    <img src="assets/images/testimonial/testimonial-1.jpg"
                                        alt="testimonial Thumbnail">
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-thumb-company d-flex mb-30">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/quote.png" alt="Author Image">
                                        </div>
                                        <div class="author-company">
                                            <img src="assets/images/testimonial/client1.png" alt="Author Company">
                                        </div>
                                    </div>
                                    <p>"Working with Your Agency has been game-changer
                                        for the our business. Their strategic insights innovative solutions way have
                                        propelled growth satisfied."</p>
                                    <div class="author-info-box">
                                        <div class="author-info">
                                            <h4>Ricardo F. Bowers</h4>
                                            <span class="position">CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--====== End Testimonial Section =======--> --}}
                <!--====== Start Integrations Section =======-->
                <section class="intregration-tools-ss pt-130 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title text-anm">Full integration with your tools</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="tool-img">
                                        <img src="https://img.icons8.com/?size=100&id=13930&format=png&color=000000"
                                            alt="Tools Icon">
                                    </div>
                                    <h5>LinkedIn </h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1100">
                                    <div class="tool-img">
                                        <img src="https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=000000"
                                            alt="Tools Icon">
                                    </div>
                                    <h5>X (twitter)</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="tool-img">
                                        <img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000"
                                            alt="Tools Icon">
                                    </div>
                                    <h5>Facebook </h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1300">
                                    <div class="tool-img">
                                        <img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000"
                                            alt="Tools Icon">
                                    </div>
                                    <h5>Instagram </h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1400">
                                    <div class="tool-img">
                                        <img src="https://img.icons8.com/?size=100&id=13642&format=png&color=000000"
                                            alt="Tools Icon">
                                    </div>
                                    <h5>Reddit </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--====== End Integrations Section =======-->
                <!--====== Start Blogs Section =======-->
                <section class="blogs-ss pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Section Title ===-->
                                <div class="section-title text-center mb-60">
                                    <h2 class="text-anm">Stay Updated with LaloDev Certify <br>
                                        Latest News & Insights</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--=== Blog Post Item ===-->
                                <div class="blog-post-item style-two mb-30" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="post-thumbnail">
                                        <img src="https://th.bing.com/th/id/R.a9f5aba3427dc23e7d569affa937805f?rik=2zEs9%2bx43S6IEA&pid=ImgRaw&r=0"
                                            alt="Certification Blog">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta style-one">
                                            <span class="category"><a href="#">Certifications</a></span>
                                            <span class="date"><a href="#">March 5, 2025</a></span>
                                        </div>
                                        <h4 class="title"><a>Why Getting Certified Boosts
                                                Your Career</a></h4>
                                        <p>Learn how LaloDev Certify can help you stand out in the competitive job
                                            market with industry-recognized certifications.</p>
                                        <a href="https://t.me/lalo_ceo" class="read-more style-one"> Contact now </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--=== Blog Post Item ===-->
                                <div class="blog-post-item style-two mb-30" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    <div class="post-thumbnail">
                                        <img src="https://static.vecteezy.com/system/resources/previews/011/318/779/original/certificate-icon-logo-design-png.png"
                                            alt="Certification Blog">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta style-one">
                                            <span class="category"><a href="#">LaloDev Certify</a></span>
                                            <span class="date"><a href="#">March 5, 2025</a></span>
                                        </div>
                                        <h4 class="title"><a>Top Certifications to Elevate
                                                Your Skills</a></h4>
                                        <p>Explore the most valuable certifications that can help you secure better
                                            opportunities and grow your expertise.</p>
                                        <a href="https://learn.lalodev.com" class="read-more style-one"> Start
                                            learning today </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!--====== End Blogs Section =======-->
            </main>
            <!--====== Start Footer ======-->
            <footer class="software-footer primary-black-bg">
                <div class="container">
                    <!--=== Newsletter Wrapper  ===-->
                    <div class="newsletter-wrapper bg_cover pt-100 pb-100" data-aos="fade-up"
                        data-aos-duration="1200" style="background-image: url(assets/images/bg/cta-bg1.png);">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <!--=== Footer Section Content Box ===-->
                                <div class="section-content-box text-white text-center">
                                    <h2>Enhance Your Career with LaloDev Certify</h2>
                                    <h5>Earn industry-recognized certifications and showcase your expertise to the
                                        world.</h5>
                                    <a href="https://lalodev.com" class="theme-btn style-one">Get Certified Today</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Copyright ===-->
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>&copy; 2025 <span>Lalo dev </span> - All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright-nav">
                                    <ul>
                                        <li><a href="https://lalodev.com">Official site</a></li>
                                        <li><a href="https://t.me/lalo_ceo">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!--====== End Footer  ======-->
        </div>
    </div>
    <!--====== Jquery js ======-->
    <script src="common/js/plugins/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="common/js/plugins/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="common/js/plugins/bootstrap.min.js"></script>
    <!--====== GSap Js ======-->
    <script src="common/js/plugins/gsap/gsap.min.js"></script>
    <script src="common/js/plugins/gsap/SplitText.min.js"></script>
    <script src="common/js/plugins/gsap/ScrollSmoother.min.js"></script>
    <script src="common/js/plugins/gsap/ScrollTrigger.min.js"></script>
    <!--====== Slick js ======-->
    <script src="common/js/plugins/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="common/js/plugins/jquery.magnific-popup.min.js"></script>
    <!--====== Aos js ======-->
    <script src="common/js/plugins/aos.js"></script>
    <!--====== Common js ======-->
    <script src="common/js/common_script.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/theme.js"></script>
</body>

</html>
