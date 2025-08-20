<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:locale" content="es_MX">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="storage/assets/images/fav.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="storage/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="storage/assets/css/animate.min.css">
    <link rel="stylesheet" href="storage/assets/css/ainex-icons.css">
    <link rel="stylesheet" href="storage/assets/css/nice-select.css">
    <link rel="stylesheet" href="storage/assets/css/swiper.min.css">
    <link rel="stylesheet" href="storage/assets/css/venobox.min.css">
    <link rel="stylesheet" href="storage/assets/css/meanmenu.css">
    <link rel="stylesheet" href="storage/assets/css/main.css">
    @stack('head')
    <x-analytics.ga4/> {{-- Lee GA4_ID de config/services --}}
    <x-analytics.meta-pixel/> {{-- Lee FB_PIXEL_ID de config/services --}}
</head>

<body>
<div class="body-overlay"></div>
@if(!empty($showPreloader) && $showPreloader)
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="storage/assets/images/logos/logo-icon.webp" alt="Loading"></div>
        </div>
    </div>
    <!-- Preloader end -->
@endif
<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <span><i class="tji-rocket"></i></span>
    </button>
</div>
<!-- back to top end -->

<!-- start: Search Popup -->
<div class="search_popup">
    <div class="search_close">
        <button type="button" class="search_close_btn">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="tj_search_wrapper">
                    <div class="search_form">
                        <form action="#">
                            <div class="search_input">
                                <h4 class="title">Search Projects, Service or Blog.</h4>
                                <div class="search-box">
                                    <input class="search-input-field" type="search" placeholder="Search here..."
                                           required="">
                                    <button type="submit">
                                        <i class="tji-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-popup-overlay"></div>
<!-- end: Search Popup -->

<!-- start: Offcanvas Menu -->
<div class="tj-offcanvas-area d-none d-lg-block">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('index') }}" class="mobile_logo">
                        <img src="storage/assets/images/logos/logo.webp" alt="Massuttier">
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="offcanvas-text">
                <p>En <strong>{{ config('app.name') }}</strong> no solo diseñamos páginas web, creamos herramientas
                    digitales que
                    trabajan por tu negocio las 24 horas. Con experiencia, creatividad y estrategia, ayudamos a
                    convertir visitas en clientes y proyectos en historias de éxito.</p>
            </div>
            <!--<div class="hamburger-search-area">
                <h5 class="hamburger-title">Search Now!</h5>
                <div class="hamburger_search">
                    <form method="get" action="{{ route('index') }}">
                        <button type="submit"><i class="tji-search"></i></button>
                        <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
                    </form>
                </div>
            </div>-->
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contacto</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">WhatsApp</span>
                        <a class="contact-link" href="https://wa.me/524422593837" target="_blank">+524422593837</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link" href="mailto:hola@massuttier.com.mx">hola@massuttier.com.mx</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Dirección</span>
                        <span class="contact-link">Cto. Interior Melchor Ocampo, Verónica Anzúres, Miguel Hidalgo, 11300 Ciudad de México, CDMX</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Síguenos</h5>
            <div class="social-links style-2">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="tji-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="tji-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="tji-instagram"></i></a></li>
                    <li><a href="https://x.com/" target="_blank"><i class="tji-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Offcanvas Menu -->

<!-- start: Hamburger Menu -->
<div class="hamburger-area d-lg-none">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('index') }}" class="mobile_logo">
                        <img src="storage/assets/images/logos/logo.webp" alt="Massuttier">
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hamburger_menu">
                <div class="mobile_menu"></div>
            </div>
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contacto</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">WhatsApp</span>
                        <a class="contact-link" href="https://wa.me/524422593837">+52 (442)-259-3837</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link" href="mailto:hola@massuttier.com.mx">hola@massuttier.com.mx</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Dirección</span>
                        <span class="contact-link">Cto. Interior Melchor Ocampo, Verónica Anzúres, Miguel Hidalgo, 11300 Ciudad de México, CDMX</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Síguenos</h5>
            <div class="social-links style-2">
                <ul>
                    <li><a href="https://www.facebook.com/studiomassuttier" target="_blank"><i class="tji-facebook"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="tji-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/studiomassuttier/" target="_blank"><i
                                class="tji-instagram"></i></a></li>
                    <li><a href="https://x.com/aamassuttier" target="_blank"><i class="tji-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Hamburger Menu -->
@include('includes.header-main')

<main id="primary" class="site-main">
    @yield('content')
</main>

@include('includes.footer-main')

<!-- JS here -->
<script src="storage/assets/js/jquery.min.js"></script>
<script src="storage/assets/js/bootstrap.bundle.min.js"></script>

<script src="storage/assets/js/gsap.min.js"></script>
<script src="storage/assets/js/gsap-scroll-to-plugin.min.js"></script>
<script src="storage/assets/js/gsap-scroll-trigger.min.js"></script>
<script src="storage/assets/js/gsap-split-text.min.js"></script>
<script src="storage/assets/js/smooth-scroll.min.js"></script>

<script src="storage/assets/js/jquery.nice-select.min.js"></script>
<script src="storage/assets/js/swiper.min.js"></script>
<script src="storage/assets/js/waypoints.min.js"></script>
<script src="storage/assets/js/counterup.min.js"></script>
<script src="storage/assets/js/venobox.min.js"></script>
<script src="storage/assets/js/appear.min.js"></script>
<script src="storage/assets/js/wow.min.js"></script>
<script src="storage/assets/js/meanmenu.js"></script>
<script src="storage/assets/js/main.js"></script>
{{ $slot ?? '' }}
@stack('scripts')

</body>

</html>
