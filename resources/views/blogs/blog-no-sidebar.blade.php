
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bracketweb.com/eduact-html/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:37:53 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog || Eduact || HTML Template For Educaton & LMS</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Eduact HTML Template For Educaton & LMS" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Water+Brush&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/eduact-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/eduact.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('layouts.header')<!-- /.main-header-two -->

        <div class="stricky-header stricked-menu main-menu main-header-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
            <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
            <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
            <div class="container text-center">
                <h2 class="page-header__title">Blog</h2><!-- /.page-title -->
                <ul class="page-header__breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.page-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <!-- Blog Start -->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach ($blogs_grids as $blog_grid)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-{{ $blog_grid->image }}" alt="eduact">
                                <a href="blog-details-right.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-right.html">{{ $blog_grid->department }}</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">{{ $blog_grid->date }}</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-right.html">{{ $blog_grid->blog_title }}</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-right.html">{{ $blog_grid->author_name }}</a>
                                        {{ $blog_grid->author_position }}
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    @endforeach
                   
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-2.jpg" alt="eduact">
                                <a href="blog-details.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details.html">Introducing the Latest tech Features in your Business</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-3.jpg" alt="eduact">
                                <a href="blog-details-left.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-left.html">Basic Rules of Running Web Agency business Solution</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-left.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-4.jpg" alt="eduact">
                                <a href="blog-details-right.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-right.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-right.html">Get a Few Solutions to Hire a Best right Candidate</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-right.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-right.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-5.jpg" alt="eduact">
                                <a href="blog-details.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details.html">When an Unknown Printer took a Galley of Type</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="blog-two__item">
                            <div class="blog-two__image">
                                <img src="assets/images/blog/blog-2-6.jpg" alt="eduact">
                                <a href="blog-details-left.html"></a>
                            </div><!-- /.blog-image -->
                            <div class="blog-two__content">
                                <div class="blog-two__top-meta">
                                    <div class="blog-two__cats"><a href="blog-list-left.html">Development</a></div><!-- /.blog-cats -->
                                    <div class="blog-two__date">26 Mar, 2023</div><!-- /.blog-date -->
                                </div>
                                <h3 class="blog-two__title">
                                    <a href="blog-details-left.html">The Generated Orem Ipsum is There fore Always</a>
                                </h3><!-- /.blog-title -->
                                <div class="blog-two__meta">
                                    <div class="blog-two__meta__author">
                                        <img src="assets/images/blog/author-1.png" alt="eduact" />
                                        <a href="blog-list-left.html">Darrell Steward</a>
                                        Fronted Developer
                                    </div>
                                    <a class="blog-two__rm" href="blog-details-left.html"><span class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                </div><!-- /.blog-meta -->
                            </div><!-- /.blog-content -->
                        </div><!-- /.blog-card-one -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="blog-page__pagination clearfix">
                            <li><a href="blog-list-left.html" class="active">1</a></li>
                            <li><a href="blog-list-right.html">2</a></li>
                            <li class="next"><a href="blog-list.html"><span class="icon-caret-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

      @include('layouts.footer_two')<!-- /.main-footer-two -->

        <section class="copyright text-center">
            <div class="container wow fadeInUp" data-wow-delay="400ms">
                <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Eduact HTML Template. All Rights Reserved</p>
            </div><!-- /.container -->
        </section><!-- /.copyright -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="183" height="48" alt="eduact" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9236809850">+92 (3680) - 9850</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span><i class="icon-Search"></i></button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->

    @include('layouts.footerScripts')
    
</body>


<!-- Mirrored from bracketweb.com/eduact-html/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 08:37:54 GMT -->
</html>