<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.pixelfit.agency/sasly/home-ai/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Dec 2024 04:57:25 GMT -->

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description"
        content="Main landing page for AI products, showcasing key features, benefits, and CTA sections.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Lalo Dev | Certify</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://lalodev.com/images/icon.png" type="image/png">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <!--====== FlatIcon css ======-->
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
    <!--====== AnimatedHeadline css ======-->
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="home-fintech">
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <!--====== Start Header Area  ======-->
    <header class="header-area header-three">
        <!--====  Header Navigation  ===-->
        <div class="header-navigation">
            <!--====  Header Nav Inner  ===-->
            <div class="nav-inner-menu">
                <!--====  Primary Menu  ===-->
                <div class="primary-menu">
                    <!--====  Site Branding  ===-->
                    <div class="site-branding">
                        <a href="/" class="lalodev-logo"><img src="https://lalodev.com/images/icon.png"
                                alt="Brand Logo" width="60"></a>
                    </div>
                    <!--=== Sasly Main Menu===-->
                    <div class="sasly-nav-menu">
                        <!--=== Main Menu ===-->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item "><a href="#">Home</a>
                                </li>
                                <li class="menu-item has-children"><a href="https://lalodev.com/about">about</a></li>
                                <li class="menu-item has-children"><a
                                        href="https://t.me/lalo_dev_community">Community</a></li>
                                <li class="menu-item has-children"><a href="https://t.me/lalo_dev">Contact</a></li>
                            </ul>
                        </nav>
                        <!--=== Sasly Nav Button ===-->
                        <div class="sasly-nav-button mt-20 d-block d-md-none">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="theme-btn style-one">Dashboard<i
                                            class="far fa-angle-double-right"></i></a>
                                @else
                                    <a href="{{ url('login') }}" class="theme-btn style-one">Login<i
                                            class="far fa-angle-double-right"></i></a>
                                @endauth
                            @endif
                        </div>
                        <!--=== Sasly Menu Bottom ===-->
                        <div class="sasly-menu-bottom mt-50 d-block d-lg-none">
                            <h5>Follow Us</h5>
                            <ul class="social-link">
                                <li><a href="https://instagram.com/lalo_dev_official"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://lalo_dev_community"><i class="fab fa-telegram"></i></a></li>
                                <li><a href="www.linkedin.com/in/mikael-endale-7572722b3"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.youtube.com/@Lalo_Dev"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--=== Header Nav Right ===-->
                    <div class="nav-right-item">
                        <div class="nav-button d-none d-md-block">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="theme-btn style-one">Dashboard </a>
                                @else
                                    <a href="{{ url('login') }}" class="theme-btn style-one">Login </a>
                                @endauth
                            @endif
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header Area  ======-->
    <!--======  Smooth Wrapper  ======-->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!--======  line Wrap  ======-->
            <div class="line_wrap">
                <div class="line_item_one"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
            </div>
            <!--======  Main  ======-->
            <main>
                <!--======  Start Hero Section  ======-->
                <section class="hero-ai"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--===  Hero Content  ===-->
                                <div class="hero-content text-center">
                                    <h1 data-aos="fade-up" data-aos-duration="1200">
                                        LaloDev Certification System
                                        <br> Empowering Your Achievements
                                    </h1>
                                    <h5 data-aos="fade-up" data-aos-duration="1400">  Whether you're a student, a professional, or
                                        part of our community, our platform offers a reliable way to earn certifications
                                        in various fields </h5>
                                    <div class="hero-search mb-20" data-aos="fade-up" data-aos-duration="1600">
                                        <form>
                                            <label><i class="far fa-user"></i></label>
                                            <input type="text" class="form_control" placeholder="Certificate id"
                                                required>
                                            <button class="theme-btn style-one">Check out</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </section><!--======  End Hero Section  ======-->  
                <!--=== End integration Section ===-->
                <section class="integration-tools-ai pt-120 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center mb-50" data-aos="fade-up"
                                    data-aos-duration="800">
                                    <h4 class="title text-anm">Full integration with your apps</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-4 col-md-3">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="tool-img">
                                        <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Linkedin_unofficial_colored_svg-512.png" alt="Tools Icon">
                                    </div>
                                    <h5>Linkedin</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1100">
                                    <div class="tool-img">
                                        <img src="https://cdn1.iconfinder.com/data/icons/business-finance-vol-3-39/512/cv_resume_job_application-64.png" alt="Tools Icon">
                                    </div>
                                    <h5>Resume</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="tool-img">
                                        <img src="https://cdn3.iconfinder.com/data/icons/social-rounded-2/72/Behance-256.png" alt="Tools Icon">
                                    </div>
                                    <h5>Portfolio</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1300">
                                    <div class="tool-img">
                                        <img src="assets/images/tools/tool4.png" alt="Tools Icon">
                                    </div>
                                    <h5>GitHub</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-3">
                                <div class="tool-item mb-30" data-aos="fade-up" data-aos-duration="1400">
                                    <div class="tool-img">
                                        <img src="https://cdn2.iconfinder.com/data/icons/flat-pack-1/64/Education-512.png" alt="Tools Icon">
                                    </div>
                                    <h5>Applications</h5>
                                </div>
                            </div> 
                        </div>
                    </div>
                </section><!--====== End Integration Section ======--> 
                <!--====== Start Testimonial Section ======-->
                <section class="testimonial-ai pt-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center mb-60">
                                    <span class="sub-heading">Our Testimonials</span>
                                    <h2 class="text-anm">What Our Customer Say Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-testimonial">
                        <ul class="marquee-slider">
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-1.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-2.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-3.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-4.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-2.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-3.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-2.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-3.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-4.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-testimonial">
                        <ul class="marquee-slider">
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-4.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-5.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-6.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-2.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-3.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-4.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-3.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-4.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="sasly-testimonial-item style-five mb-30">
                                    <div class="testimonial-content">
                                        <div class="author-thumb-company d-flex mb-30">
                                            <div class="author-thumb-info d-flex">
                                                <div class="author-thumb">
                                                    <img src="assets/images/testimonial/author-5.png"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Ricardo F. Bowers</h5>
                                                    <span class="position">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <div class="author-company">
                                                <img src="assets/images/testimonial/company.png" alt="Author Company">
                                            </div>
                                        </div>
                                        <p>"Working with our Agency has been game-changer for then business to strategic
                                            insight innovative solutions way have to
                                            growth satisfied."</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section><!--====== End Testimonial Section ======-->
                <!--=== Start Faq Section ===-->
                <section class="faq-ai pt-100 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-content-box mb-50" data-aos="fade-right"
                                    data-aos-duration="1700">
                                    <div class="section-title">
                                        <span class="sub-heading">FAQs</span>
                                        <h2 class="text-anm">Frequently Asked Questions</h2>
                                    </div>
                                    <p>Have any questions? Don’t hesitate to contact us!</p>
                                    <a href="https://html.pixelfit.agency/sasly/pages/faqs.html"
                                        class="theme-btn style-one">Get A Quote <i
                                            class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="section-content-box mb-50">
                                    <!--====== Accordion   ======-->
                                    <div class="accordion" id="accordionOne" data-aos="fade-up"
                                        data-aos-duration="600">
                                        <!--====== Accordion Item  ======-->
                                        <div class="accordion-item style-one mb-25">
                                            <div class="accordion-header">
                                                <h5 class="accordion-title" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse1" aria-expanded="true">
                                                    What services does your fintech agency provide?
                                                </h5>
                                            </div>
                                            <div id="collapse1" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionOne">
                                                <div class="accordion-content">
                                                    <p>Our return policy allows you to return unworn and unwashed items
                                                        within 5 days of purchase for a full refund or exchange 45
                                                        Please see our return policy page for full details and
                                                        instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--====== Accordion Item  ======-->
                                        <div class="accordion-item style-one mb-25" data-aos="fade-up"
                                            data-aos-duration="700">
                                            <div class="accordion-header">
                                                <h5 class="accordion-title" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse2" aria-expanded="false">
                                                    How do you ensure the security of financial data?
                                                </h5>
                                            </div>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionOne">
                                                <div class="accordion-content">
                                                    <p>Our return policy allows you to return unworn and unwashed items
                                                        within 5 days of purchase for a full refund or exchange 45
                                                        Please see our return policy page for full details and
                                                        instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--====== Accordion Item  ======-->
                                        <div class="accordion-item style-one mb-25" data-aos="fade-up"
                                            data-aos-duration="800">
                                            <div class="accordion-header">
                                                <h5 class="accordion-title" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse3" aria-expanded="false">
                                                    What is your experience in developing fintech applications?
                                                </h5>
                                            </div>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionOne">
                                                <div class="accordion-content">
                                                    <p>Our return policy allows you to return unworn and unwashed items
                                                        within 5 days of purchase for a full refund or exchange 45
                                                        Please see our return policy page for full details and
                                                        instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--====== Accordion Item  ======-->
                                        <div class="accordion-item style-one mb-25" data-aos="fade-up"
                                            data-aos-duration="900">
                                            <div class="accordion-header">
                                                <h5 class="accordion-title" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse4" aria-expanded="false">
                                                    How do you approach a new fintech project?
                                                </h5>
                                            </div>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionOne">
                                                <div class="accordion-content">
                                                    <p>Our return policy allows you to return unworn and unwashed items
                                                        within 5 days of purchase for a full refund or exchange 45
                                                        Please see our return policy page for full details and
                                                        instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--====== Accordion Item  ======-->
                                        <div class="accordion-item style-one mb-25" data-aos="fade-up"
                                            data-aos-duration="1000">
                                            <div class="accordion-header">
                                                <h5 class="accordion-title" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse5" aria-expanded="false">
                                                    How can I get started with your fintech services?
                                                </h5>
                                            </div>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionOne">
                                                <div class="accordion-content">
                                                    <p>Our return policy allows you to return unworn and unwashed items
                                                        within 5 days of purchase for a full refund or exchange 45
                                                        Please see our return policy page for full details and
                                                        instructions.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--=== End Faq Section ===-->
                <!--====== Start CTA Section ======-->
                <section class="cta-ai">
                    <div class="container">
                        <div class="cta-wrapper" data-aos="fade-up" data-aos-duration="1200">
                            <div class="pattern-bg bg_cover"
                                style="background-image: url(assets/images/cta/dot-bg1.png);"></div>
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <!--===  Section Content Box  ===-->
                                    <div class="section-content-box">
                                        <h2>Struggling to scale customer insights?</h2>
                                        <p>Getting started is easy! Simply contact us through our website, and we'll
                                            schedule a consultation to discuss your needs</p>
                                        <div class="cta-button mb-30">
                                            <a href="https://html.pixelfit.agency/sasly/pages/contact.html"
                                                class="theme-btn style-one">Start 14-days Free Trial <i
                                                    class="far fa-angle-double-right"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="check-list style-one">
                                                    <li><i class="fas fa-badge-check"></i>No Hidden Charge Included
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="check-list style-one">
                                                    <li><i class="fas fa-badge-check"></i>User friendly Development
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!--====== End CTA Section ======-->
            </main>
            <!--=== Footer Area ===-->
            <footer class="ai-footer"> 
                <br><br>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>&copy; 2024 <span>Sasly</span> - All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright-nav">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!--====== End Footer  ======-->
            <!--====== Back To Top  ======-->
            <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    <!--====== Jquery js ======-->
    <script src="common/js/plugins/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="common/js/plugins/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="common/js/plugins/bootstrap.min.js"></script>
    <!--====== Gsap Js ======-->
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
    <!--====== Main js ======-->
    <script src="common/js/common_script.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/jquery.animatedheadline.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/theme.js"></script>
</body>

</html>
