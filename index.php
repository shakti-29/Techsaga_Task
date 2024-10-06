<!DOCTYPE html>
<html lang="en">

<head>
    <title>Educt | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <header class="header">
        <div class="top-bar bg-orange py-2 px-2">
            <p class="fade-animation mb-0 text-white text-center">Start today with Knowledge, We provide students with optimum and best result <strong>seeking strategies</strong>.</p>
        </div>
        <nav class="navbar navbar-expand-lg backdrop-white-bg pt-1 pt-md-2 pt-lg-3">
            <div class="container-fluid side-space">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/educt-logo.svg" alt="Educt Logo" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
                    <ul class="navbar-nav  m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center gap-40">
                        <a href="#" class="login-text me-2">Login</a>
                        <a class="orange-btn"> <span> Sign Up</span></a>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Offcanvas Navbar for Mobile -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <div class="offcanvas-title" id="offcanvasNavbarLabel">
                <img src="assets/images/educt-logo.svg" class="img-fluid" alt="logo" />
            </div>
            <button type="button" class="btn-close me-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-40 mt-4">
                <a href="#" class="login-text me-2">Login</a>
                <a href="#" class="orange-btn"><span>Sign Up</span></a>
            </div>
        </div>
    </div>

    <!--------- End header -------------->


    <!-- Hero Section -->
    <section>
        <div class="container-fluid px-0">
            <div class="hero-section">
                <div class="hero-content side-space">
                    <div class="position-relative">
                        <h1>Empowering <span class="text-darkblue">Minds,</span><br><span class="text-darkblue">Enriching</span> Futures</h1>
                        <img src="assets/images/hero-heading-icon.png" alt="Top right icon" class="top-right-image">
                    </div>
                    <p class="mt-4">We are committed to providing you with an exceptional learning experience that is both interactive and engaging.</p>
                    <div class="hero-buttons mt-4 mt-xxl-5">

                        <a class="orange-btn">
                            <span>Join for free</span>
                        </a>

                        <div class="position-relative ms-4" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="play-icon">
                                <div class="wave-animation"></div>
                                <i class="bi bi-play-fill"></i>
                            </div>
                        </div>
                        <span class="play-text" data-bs-toggle="modal" data-bs-target="#videoModal"> Watch how it works</span>
                    </div>
                </div>
                <div class="hero-img">
                    <img src="assets/images/slide-image.jpg" alt="Hero image" class="img-fluid">
                </div>
            </div>

            <div class="hero-moreinfo-container">
                <!-- Scroll Indicator -->
                <div class="scroll-indicator" id="scrollIndicator">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
                    </svg>Scroll
                </div>


                <div class="hero-info">
                    <div class="d-flex flex-nowrap text-center justify-content-md-center align-items-stretch ">
                        <!-- Discover section -->
                        <div class="hero-card">
                            <div class="icon">
                                <img src="assets/images/discover.png" alt="icon">
                            </div>
                            <h3>Discover</h3>
                            <p>Empowering educators and captivating students.</p>
                        </div>

                        <!-- Mentor section -->

                        <div class="hero-card">
                            <div class="icon text-info">
                                <img src="assets/images/mentor.png" alt="icon">
                            </div>
                            <h3>Mentor</h3>
                            <p>Guiding you towards success and helping you reach your full potential.</p>
                        </div>


                        <!-- Learn section -->
                        <div class="hero-card">
                            <div class="icon text-warning">
                                <img src="assets/images/learn.png" alt="icon">
                            </div>
                            <h3>Learn</h3>
                            <p>Unlock your potential with personalized learning experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Modal for Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content p-0 bg-transparent border-0">
                <div class="modal-header border-bottom-0 pt-0 ps-0 pe-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  modal-custom-style">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/78Homn79Qsk?si=cvpkzF-ywZrmSrp-" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section End  -->


    <!-- Companies -->

    <section class="pb-100 pt-100 companie-section" id="companies">
        <div class="container company-container">
            <div class="mb-5 text-center">
                <h3 class="company-title"> Trusted by 1,000+ Companies Worldwide</h3>
            </div>
            <div class="company-wrapper">
                <div class="company-logo"><img src="assets/images/company/google.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/netflix.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/fb.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/amazon.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/grab.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/airbnd.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/google.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/netflix.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/fb.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/amazon.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/grab.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/airbnd.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/google.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/netflix.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/fb.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/amazon.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/grab.jpg" alt="company logo" class="img-fluid"></div>
                <div class="company-logo"><img src="assets/images/company/airbnd.jpg" alt="company logo" class="img-fluid"></div>

            </div>

        </div>
    </section>
    <!-- End Companies -->

    <!-- About Us Section -->
    <section>
        <div class="container-fluid side-space">
            <div class="about-section">
                <div class="images">
                    <div class="main-image-container">
                        <div class="chart-icon">
                            <i class="bi bi-bar-chart-fill"></i>
                        </div>
                        <img src="assets/images/about-imge.jpg" alt="Main Image" class="main-img">
                    </div>
                    <div class="sub-images">
                        <img src="assets/images/abou-img-2.png" alt="Sub Image 1">
                        <img src="assets/images/abou-img-3.png" alt="Sub Image 2">
                    </div>
                </div>


                <div class="about-content">
                    <h3 class="mb-3">ABOUT</h3>
                    <h2 class="mb-4"><span class="text-orange">Who</span> We Are ?</h2>
                    <p>Welcome to our education website, where we believe that learning is a lifelong journey that should be accessible to all.</p>
                    <p>Our mission is to provide high-quality educational resources and support to individuals of all ages, backgrounds, and abilities.</p>

                    <div class="mt-4 mt-lg-5">
                        <a href="#" class="about-btn">
                            Know More
                            <span class="arrow">
                                <i class="bi bi-arrow-right"></i>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End-->


    <!--our classes -->

    <section class="pt-100 pb-100">
        <div class="container-fluid  side-space">
            <div class="common-title">
                <h3 class="mb-3">Explore Courses</h3>
                <h2>Our Most <span class="text-orange">Popular</span> Class</h2>
                <p class="mb-0 mt-3">Let's join our famous class, the knowledge provided will definitely be useful for you.</p>
            </div>
        </div>

        <div class="container-fluid  side-space mt-5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-1.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-2.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-3.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-4.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-2.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="class-card">
                            <img src="assets/images/class-3.jpg" class="img-fluid" alt="class-1">
                            <div class="class-card-body">
                                <h3 class="course-text">Design</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="class-card-title line-clamp-1">Figma UI UX Design Course </h5>
                                    <span class="class-card-arrow"><a href="#"><i class="bi bi-arrow-up-right"></i></a></span>
                                </div>
                                <p class="class-card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <span class="ratings-text">4.3</span>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="rating-no">(16,325)</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <div class="enrolled-info">
                                        <img src="assets/images/avtar.jpg" alt="Instructor">
                                        <div>
                                            <p class="mb-0">Jane Cooper</p>
                                            <p class="mb-0"> 2001 Enrolled</p>
                                        </div>

                                    </div>
                                    <div class="class-card-price">$17.84</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Swiper Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--our classes end-->

    <!-- right circle img -->

     <div class="right-top-img">
         <img src="assets/images/right-circle-img.png">
     </div>

       <!-- right circle img -->

    <!-- All-In-One   -->
    <section class="pb-100 all-in-one">
        <div class="container">
            <div class="text-center common-title">
                <h2>All-In-One For <span class="text-orange">Your Child</span></h2>
                <p>Guiding you towards success and helping you reach your full potential.</p>
            </div>

            <div class="all-in-one-card-container row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 mb-5 mb-lg-0">
                    <div class="all-in-one-card-box">
                        <div class="all-in-one-icon-container">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <div class="mt-5 all-in-one-card-content">
                            <h3>Timely updating on <br class="d-none d-lg-flex"> your child’s</h3>
                            <p>Our mentors keep you updated on the progress made by your child so far.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 mb-5 mb-lg-0">
                    <div class="all-in-one-card-box">
                        <div class="all-in-one-icon-container" style="background-color: #f79e1b;">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="mt-5 all-in-one-card-content">
                            <h3>Easy Scheduling & <br class="d-none d-lg-flex"> Attendance Classes</h3>
                            <p>We offer specially designed tests and assignments which focuses on individual child’s learning.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12">
                    <div class="all-in-one-card-box">
                        <div class="all-in-one-icon-container" style="background-color: #45aaf2;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="mt-5 all-in-one-card-content">
                            <h3>Compete & <br class="d-none d-lg-flex"> level up</h3>
                            <p>The tests and assignments are evaluated and compared with other students.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- All-In-One  End -->


    <!-- Blog -->

    <section class="blog-news-section pb-100">
        <div class="container-fluid side-space">

            <div class="common-title">
                <h2 class="blog-section-title text-center mb-3"><span class="text-orange">Latest</span> News and Resources</h2>
                <p class="text-center mb-4">Unlock your learning potential with our educational insights and expertise.</p>
            </div>

            <div class="row pt-4 pt-sm-5">
                <!-- Main Blog Article on the Left -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="blog-left-card">
                        <div class="main-article">
                            <img src="assets/images/blog-1.jpg" class="blog-left-card-img img-fluid" alt="Blog Image">
                        </div>
                        <div class="blog-left-card-body">
                            <span class="blog-badge-left">NEWS</span>
                            <h5 class="blog-card-title mt-4">10 Tips for Effective Time Management for Students</h5>
                            <p class="blog-card-text mb-0 mt-3">Learn how to balance your academic, social, and personal life with these practical time management strategies it’s entirely achievable. Start by prioritizing tasks focus on what’s most important and time-sensitive.</p>
                            <a href="#" class="btn btn-link mt-4">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Right Side  with Blog Cards -->
                <div class="col-lg-6">
                    <div class="row justify-content-center blog-right-card">


                        <div class="col-12">
                            <div class="blog-card">
                                <div class="blog-card-img-wrapper">
                                    <img src="assets/images/blog-2.jpg" class="blog-card-img" alt="Student Learning 1">
                                    <span class="blog-badge">PRESS RELEASE</span>
                                </div>
                                <div class="blog-card-body">
                                    <h5 class="blog-card-title-right">How to Build Strong Relationships with Students as a Teacher</h5>
                                    <p class="blog-card-text">
                                        This post explores the many benefits of learning a second language, such as improved communication skills and cognitive development.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="blog-card">
                                <div class="blog-card-img-wrapper">
                                    <img src="assets/images/blog-3.jpg" class="blog-card-img" alt="Student Learning 2">
                                    <span class="blog-badge">PRESS RELEASE</span>
                                </div>
                                <div class="blog-card-body">
                                    <h5 class="blog-card-title-right">The Importance of Learning a Second Language</h5>
                                    <p class="blog-card-text">
                                        This post highlights the benefits of learning a second language, improving cognitive and communication skills.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="blog-card">
                                <div class="blog-card-img-wrapper">
                                    <img src="assets/images/blog-4.jpg" class="blog-card-img" alt="Student Learning 3">
                                    <span class="blog-badge">PRESS RELEASE</span>
                                </div>
                                <div class="blog-card-body">
                                    <h5 class="blog-card-title-right">How Technology Enhances Learning</h5>
                                    <p class="blog-card-text">
                                        This post discusses the role of technology in modern education and how it improves the learning process.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--End Blog -->

    <!-- Footer & Newsletter -->

    <footer class="footer">
        <div class="footer-pattern-img">
            <img src="assets/images/half-footer-circle.png" class="img-fluid" alf="Half footer circle">
        </div>
        <div class="px-0">

            <!-- Newsletter  -->
            <div class="container gx-0 position-relative">
                <div class="newsletter-section">
                    <div class="d-block d-lg-flex justify-content-center align-items-center gap-5">
                        <div>
                            <h3>Subscribe Newsletters</h3>
                        </div>
                        <div class="newsletter-container">
                            <input type="email" placeholder="Enter your email" class="newsletter-input" required>
                            <button class="newsletter-btn">
                                Subscribe Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container gx-0 pt-80">
                <div class="d-block d-md-flex justify-content-between">
                    <!-- Footer links -->
                    <div class="footer-links">
                        <a href="#">About us</a>
                        <a href="#">Discover</a>
                        <a href="#">Explore</a>
                        <a href="#">Books</a>
                    </div>

                    <!-- Social media icons -->
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-vimeo"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <hr>

                <!-- Copyright -->
                <div class="copyright mt-3 mb-3">
                    <p class="mb-0">
                        © 2024 Shakti Yadav. All rights reserved.
                    </p>
                    <div>
                        <a href="#" class="legal-links">Terms of Service</a> <span class="px-3">|</span>
                        <a href="#" class="legal-links">Privacy Policy</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>