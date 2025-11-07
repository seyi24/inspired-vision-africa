<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <link rel="shortcut icon" href="{{ asset('images/logo/INSPIRED-AFRICA-single.png') }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspired Vision Africa - Empowering Africa's Youth to learn, Create and Lead</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/INSPIRED-AFRICA-single.png') }}" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticons/flaticon_conference.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('rev/css/rs6.css') }}">
    <link rel="stylesheet" href="{{ asset('rev/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('rev/fonts/pe-icon-7-stroke/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticons/flaticon_conference.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
  
</head>

<body>
    <div id="pq-loading">
        <div id="pq-loading-center">
            {{-- <img src="{{ asset('images/logo/INSPIRED-AFRICA.png') }}" alt="loading"> --}}
        </div>
    </div>

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ti-angle-up"></i></a>
    </div>
    <div class="pq-background-overlay"></div>
    <div class="pq-sidebar">
        <div class="pq-close-btn">
            <a class="pq-close" href="javascript:void(0)">
                <i class="ti-close"></i>
            </a>
        </div>
        <div class="pq-sidebar-block">
            <div class="pq-sidebar-header">
                <img src="{{ asset('images/logo/INSPIRED-AFRICA.png') }}" width="100" class="pq-sidebar-logo"
                    alt="confer-sidebar-logo">
            </div>
            <div class="pq-sidebar-content">
            </div>
            <div class="pq-sidebars">
                <div class="widget">
                    <div class="pq-block-group">
                        <div class="pq-block-group__inner-container ">
                            <h2 class="pq-block-heading">About Us</h2>

                            <p>David has a deep expertise in natural language processing and is about turning data into
                                insights.</p>

                            <figure class="pq-block-image size-large">
                                <img decoding="async" src="{{ asset('images/sidebar/blog_img_006-1024x585.webp') }}"
                                    alt="img" class="wp-image-2559">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-sidebar-contact">
                <h2 class="pq-contact-title"> Contact Info </h2>
                <ul class="pq-contact">
                    <li>
                        <a href="#">
                            <div class="pq-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <span>+225 unavailable</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class=" flaticon-sms"></i><span>info@inspiredvisionafrica.com</span></a>
                    </li>
                    <li>
                        <div class="pq-icon">
                            <i class=" flaticon-location"></i>
                        </div>
                        <span> Abidjan, Cote d'ivoire</span>
                    </li>
                </ul>
            </div>
            <div class="pq-sidebar-social">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header class="pq-header-style-1 pq-has-sticky wow fadeIn" id="pq-header">
        <div class="pq-bottom-header pq-header-page-3 ">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand"  href="{{ url('/') }}">
                        <img src="{{ asset('images/logo/INSPIRED-AFRICA white.png') }}" alt="nav-logo" class="nav-logo">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="pq-menu-contain">
                            <ul class="navbar-nav" id="pq-main-menu">
                                <li class="menu-item current-menu-item">
                                    <a href="{{ url('/') }}">Home </i></a>

                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/about') }}">About Us </i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Speakers </i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/gallery') }}"> Gallery </i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/contact') }}">Contact </i></a>
                                </li>

                                {{-- <li class="menu-item">
                                    <a href="#">EVENTS <i class="fa-solid fa-caret-down  "></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="event-grid.html">EVENTS GRID</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="event-list.html">EVENTS LIST</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="schedule.html">SCHEDULE</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="event-detail.html">EVENT DETAILS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#">BLOG <i class="fa-solid fa-caret-down  "></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-grid.html">BLOG GRID</a></li>
                                        <li class="menu-item"><a href="blog-list.html">BLOG LIST</a></li>

                                        <li class="menu-item-has-children">
                                            <a href="#">BLOG SIDEBAR <i
                                                    class="fa-solid fa-caret-right pq-carrot-icon "></i></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="blog-details.html">BLOG DETALS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact-us.html">Contact Us</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="pq-header-right  ">

                        <div class="pq-toggle-button" id="pq-toggle-button">
                            <a href="javascript:void(0)" class="menu-toggle">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="17" y="17" width="8" height="8" fill="#1B1B1B"></rect>
                                    <rect x="17" y="35" width="8" height="8" fill="#1B1B1B"></rect>
                                    <rect x="35" y="17" width="8" height="8" fill="#1B1B1B"></rect>
                                    <rect x="35" y="35" width="8" height="8" fill="#1B1B1B"></rect>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle">
                            <svg width="54" height="54" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="17" y="17" width="8" height="8" fill="#1B1B1B"></rect>
                                <rect x="17" y="35" width="8" height="8" fill="#1B1B1B"></rect>
                                <rect x="35" y="17" width="8" height="8" fill="#1B1B1B"></rect>
                                <rect x="35" y="35" width="8" height="8" fill="#1B1B1B"></rect>
                            </svg>
                        </span>
                    </button>
                </nav>
            </div>
        </div>
    </header>
    

    @yield('content')



    <footer class="pq-footer-page-2 ">
        <div class="pq-top-footer ">
            <div class="container">
                <div class="row  ">
                    <div class=" col-lg-4 col-md-12 border-right">
                        <div class="pq-footer-contect-wrapper-left">
                            <div class="pq-phone-icon-div">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="pq-phone-number-div ">
                                <p>Phone No.</p>
                                <a href="#">+225 unavailable</a>
                            </div>
                        </div>

                    </div>
                    <div class=" col-lg-4 col-md-12 border-right ">
                        <div class="pq-footer-contect-wrapper ">
                            <div class="pq-phone-icon-div">
                                <i class="ti-email"></i>
                            </div>
                            <div class="pq-phone-number-div ">
                                <p>Email</p>
                                <a href="#">Info@inspirvisionafrica.com</a>
                            </div>
                        </div>

                    </div>
                    <div class=" col-lg-4 col-md-12">
                        <div class="pq-footer-contect-wrapper">
                            <div class="pq-phone-icon-div">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="pq-phone-number-div ">
                                <p>Address</p>
                                <a href="#">Abidjan, Cote d'ivoire</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="pq-mid-footer">
            <div class="container">
                <div class="pq-mid-footer-wrapper">

                    <div class="mid-footer-wrapper-left">
                        <div class="mid-image-div">
                            <img src="images/logo/INSPIRED-AFRICA white.png" alt="img" class="pq-footer-logo"
                               >
                        </div>
                        <p>Committed to equipping young people with the knowledge, skills, and digital tools they need
                            to thrive in a fast-changing world.</p>
                    </div>

                    <div class="mid-footer-conference-wrapper">
                        {{-- <h5>ABOUT CONFERENCE</h5> --}}
                        <div class="mid-footer-about-list">
                            <ul>
                                <li class="about-list"> <a href="{{ url('/about') }}">About Us</a> </li>
                                <li class="about-list"> <a href="{{ url('/speakers') }}">Speakers </a></li>
                                
                            </ul>
                            <ul>
                            <li class="about-list"> <a href="{{ url('/gallery') }}">Gallery</a> </li>
                         <li class="about-list"> <a href="{{ url('/contact') }}">Contact</a> </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pq-bottom-footer">
            <div class="container">
                <div class="pq-bottom-footer-wrapper">
                    <div class="footer-socials">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>

                    </div>
                    <span>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Inspired Vision Africa
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('rev/js/rbtools.min.js') }}"></script>
    <script src="{{ asset('rev/js/rs6.min.js') }}"></script>
    <script src="{{ asset('js/rev-custom.js') }}"></script>
</body>
<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
        'tccl.baseHost': 'secureserver.net'
    }, {
        'ap': 'cpbh-mt'
    }, {
        'server': 'sg2plmcpnl492384'
    }, {
        'dcenter': 'sg2'
    }, {
        'cp_id': '9858662'
    }, {
        'cp_cache': ''
    }, {
        'cp_cl': '8'
    }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='../../../img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js'></script>

</html>
