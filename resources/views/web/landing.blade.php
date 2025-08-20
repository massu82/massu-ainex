@extends('layouts.ainex')
@section('title','Agenda una llamada con un experto')
@section('description','Tu web puede generar más clientes. Agenda una llamada de 15 minutos y recibe un plan a medida.')
@section('image','')
@push('head')
    @verbatim
        <!-- JSON-LD (Service) -->
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "ProfessionalService",
              "name": "Massuttier – Desarrollo Web",
              "url": "https://massuttier.com.mx/desarrollo-web",
              "areaServed": "MX",
              "serviceType": "Diseño y desarrollo web",
              "brand": {"@type": "Brand", "name": "Massuttier"}
            }
        </script>
        <!-- enlace de Calendly -->
        <!-- Principio del widget de globo de Calendly -->
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

    @endverbatim
@endpush
@section('content')
    <!-- start: Banner Section -->
    <section class="tj-banner-section-4">
        <div class="h4-hero">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <div class="h4-banner-area">
                            <div class="banner-content">
                                <span class="sub-title"><i
                                        class="tji-subtitle"></i>Tecnología y diseño al servicio de tu negocio</span>
                                <h1 class="banner-title text-anim">Tu Web puede generar más <span><img
                                            class="wow fadeInRight"
                                            data-wow-delay="0.65s"
                                            src="storage/assets/images/hero/title-img.webp"
                                            alt="Image"></span></h1>

                                <!-- Final del widget de enlace de Calendly -->
                                <div class="banner-btn-area wow fadeInUp" data-wow-delay=".7s">
                                    <button id="btnCalendly" class="tj-primary-btn style-2"
                                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/massuttier/informacion-sitio-web'});return false;">
                                        <div class="btn-inner">
                                            <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                            <span class="btn-text">Agendar mi llamada grartuita</span>
                                            <span class="btn-icon"><i class="tji-arrow-right"></i></span>

                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h4-slider-area">
                <div class="h4-slider-wrapper">
                    <div class="swiper swiper-container h4-hero-slider h4-hero-slider-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-1.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-2.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-3.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-4.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-5.webp" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h4-slider-wrapper">
                    <div class="swiper swiper-container h4-hero-slider h4-hero-slider-down">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-6.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-7.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-8.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-9.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h4-hero-item">
                                    <img src="storage/assets/images/project/web/project-10.webp" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bg"><img src="storage/assets/images/hero/h4-hero-shape.png" alt="Image"></div>
        </div>
        <div class="h4-hero-text-circle">
            <div class="circle-text-wrap wow fadeInUp" data-wow-delay=".7s">
                <span class="circle-text" data-bg-image="storage/assets/images/hero/circle-text-2.webp"></span>
                <a class="circle-icon" href="#nosotros"><span><i class="tji-arrow-down"></i></span></a>
            </div>
        </div>
    </section>
    <!-- end: Banner Section -->

    <!-- start: Choose Section -->
    <section id="nosotros" class="tj-choose-section-2 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading sec-heading-centered choose-heading style-4">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.3s"><i class="tji-subtitle"></i>Resultados, no promesas</span>
                        <h2 class="sec-title title-highlight">Tu negocio no necesita otra web: necesita una máquina de
                            ventas.
                            Combinamos estrategia, diseño y rendimiento para que cada sección convierta.
                            Plan claro, métricas reales y mejora continua. Menos fricción, más clientes.
                        </h2>
                        <div class="choose-author">
                            <h5 class="title">J. Andrés Massuttier</h5>
                            <span class="designation">Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box style-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-innovation"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Más clientes, menos fricción</h4>
                                <p class="desc">Arquitectura, copy y CTAs pensados para conversión: convierte tráfico en
                                    contactos reales.
                                </p>
                            </div>
                        </div>
                        <span class="count-icon"></span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box style-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-integration"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Diseño moderno y rápido</h4>
                                <p class="desc">Tailwind, buenas métricas Core Web Vitals y SEO técnico desde el inicio.
                                </p>
                            </div>
                        </div>
                        <span class="count-icon"></span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box style-2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-technology"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Estrategia a tu medida</h4>
                                <p class="desc">Diagnóstico express y plan de acción en 15 minutos. Sin bla-bla.
                                </p>
                            </div>
                        </div>
                        <span class="count-icon"></span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box style-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-support-2"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Soporte especializado</h4>
                                <p class="desc">Siempre del mismo lado: el tuyo. Un canal directo con tu especialista
                                </p>
                            </div>
                        </div>
                        <span class="count-icon"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="marquee-area">
             <div class="swiper marquee-slider">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">Conversión</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">Estrategia</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">Diseño</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">Rendimiento</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">SEO</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                     <div class="swiper-slide marquee-item">
                         <h4 class="marquee-text">Soporte</h4>
                         <div class="marquee-icon">
                             <i class="tji-marquee-icon"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>-->
    </section>
    <!-- end: Choose Section -->
    <!-- start: Client Section -->
    <section id="clientes" class="tj-client-section section-gap wow fadeInUp" data-wow-delay=".4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-content wow fadeInUp" data-wow-delay=".3s">
                        <h5 class="sec-title"><span class="client-numbers">200+</span> Nuestra red de clientes
                        </h5>
                    </div>
                    <div class="swiper client-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-1.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-2.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-3.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-4.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-5.webp" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="storage/assets/images/brands/brand-6.webp" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Client Section -->
    <!-- start: Testimonial Section -->
    <section id="testimonios" class="tj-testimonial-section-2 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading sec-heading-centered style-2">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.3s">Historias de Éxito</span>
                        <h2 class="sec-title text-anim">Testimonios Reales, Impacto Comprobado</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-wrapper-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="swiper testimonial-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item-wrap">
                                        <div class="testimonial-item style-2">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="storage/assets/images/testimonial/client-1.webp"
                                                             alt="Image">
                                                    </div>
                                                    <div class="author-header">
                                                        <h5 class="title">Laura Gómez</h5>
                                                        <span
                                                            class="designation">Directora de Marketing en Grupo Nova</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>Desde que lanzamos nuestra nueva web con su ayuda, nuestras ventas en
                                                    línea crecieron más de un 40%. El diseño transmite confianza y
                                                    profesionalismo, justo lo que necesitábamos.</p>
                                            </div>
                                            <div class="rating-area">
                                                <div class="star-ratings">
                                                    <div class="fill-ratings" style="width: 100%">
                                                        <span>★★★★★</span>
                                                    </div>
                                                    <div class="empty-ratings">
                                                        <span>★★★★★</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-wrap">
                                        <div class="testimonial-item style-2">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="storage/assets/images/testimonial/client-2.webp"
                                                             alt="Image">
                                                    </div>
                                                    <div class="author-header">
                                                        <h5 class="title">Carlos Méndez</h5>
                                                        <span class="designation">CEO de Inmobiliaria Horizonte</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>El proceso fue rápido, claro y sin complicaciones. Ahora nuestros
                                                    clientes encuentran lo que buscan en segundos, y eso se refleja en
                                                    más conversiones.</p>
                                            </div>
                                            <div class="rating-area">
                                                <div class="star-ratings">
                                                    <div class="fill-ratings" style="width: 100%">
                                                        <span>★★★★★</span>
                                                    </div>
                                                    <div class="empty-ratings">
                                                        <span>★★★★★</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-wrap">
                                        <div class="testimonial-item style-2">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="storage/assets/images/testimonial/client-3.webp"
                                                             alt="Image">
                                                    </div>
                                                    <div class="author-header">
                                                        <h5 class="title">Ana Rodríguez</h5>
                                                        <span class="designation">Fundadora de Café Urbano</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>Nos dieron una solución a la medida, no un sitio genérico. Hoy
                                                    nuestros clientes nos felicitan por la facilidad de uso y la
                                                    experiencia que ofrece nuestra web.</p>
                                            </div>
                                            <div class="rating-area">
                                                <div class="star-ratings">
                                                    <div class="fill-ratings" style="width: 80%">
                                                        <span>★★★★★</span>
                                                    </div>
                                                    <div class="empty-ratings">
                                                        <span>★★★★★</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-wrap">
                                        <div class="testimonial-item style-2">
                                            <span class="quote-icon"><i class="tji-quote"></i></span>
                                            <div class="testimonial-author">
                                                <div class="author-inner">
                                                    <div class="author-img">
                                                        <img src="storage/assets/images/testimonial/client-3.webp"
                                                             alt="Image">
                                                    </div>
                                                    <div class="author-header">
                                                        <h5 class="title">Javier Ortega</h5>
                                                        <span
                                                            class="designation">Gerente Comercial en TechSoluciones</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <p>Su equipo entendió nuestra visión desde el primer día. La nueva
                                                    plataforma no solo luce increíble, también funciona perfecto en
                                                    móviles. Nuestros leads han aumentado notablemente</p>
                                            </div>
                                            <div class="rating-area">
                                                <div class="star-ratings">
                                                    <div class="fill-ratings" style="width: 100%">
                                                        <span>★★★★★</span>
                                                    </div>
                                                    <div class="empty-ratings">
                                                        <span>★★★★★</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Testimonial Section -->
    <!-- start: Cta Section -->
    <section class="tj-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area wow fadeInUp" data-wow-delay=".3s">
                        <div class="cta-content">
                            <h2 class="title">15 min para darte un plan claro, sin costo ni humo.</h2>
                            <button id="btnCalendly" class="tj-primary-btn btn-light"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/massuttier/informacion-sitio-web'});return false;">
                                <div class="btn-inner">
                                    <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                    <span class="btn-text">Agendar mi llamada gratuita</span>
                                    <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                                </div>
                            </button>
                        </div>
                        <div class="cta-img">
                            <img src="storage/assets/images/cta/cta-bg.webp" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Cta Section -->
    <!-- start: Working process Section -->
    <div class="tj-working-process-2 section-gap section-gap-x">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading sec-heading-centered style-3">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.3s"><i class="tji-subtitle-2"></i>Éxito paso a paso</span>
                        <h2 class="sec-title text-anim">Un proceso claro que lleva tu web de la idea a resultados
                            medibles.</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-lg-4">
                    <div class="process-item-wrap style-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="process-item">
                            <div class="process-icon">
                                <span><i class="tji-phone"></i></span>
                            </div>
                            <div class="process-content">
                                <h4 class="title">Agenda tu llamada</h4>
                                <p class="desc">Elige día y hora en Calendly. Te haré 3–5 preguntas rápidas para
                                    entender tu negocio, mercado y objetivos.</p>
                            </div>
                            <div class="process-step">
                                <span>Step 01.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="process-item-wrap style-2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="process-item">
                            <div class="process-icon">
                                <span><i class="tji-innovation"></i></span>
                            </div>
                            <div class="process-content">
                                <h4 class="title">Plan a la medida</h4>
                                <p class="desc">En la llamada revisamos tu situación actual, definimos objetivos y
                                    presupuesto, y te presento un plan con entregables, tiempos y costo.</p>
                            </div>
                            <div class="process-step">
                                <span>Step 02.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="process-item-wrap style-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="process-item">
                            <div class="process-icon">
                                <span><i class="tji-rocket"></i></span>
                            </div>
                            <div class="process-content">
                                <h4 class="title">Lanza y escala</h4>
                                <p class="desc">Implementamos en sprints cortos (diseño, desarrollo y contenido),
                                    medimos leads con Pixel/GA4 y optimizamos hasta ver resultados.</p>
                            </div>
                            <div class="process-step">
                                <span>Step 03.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Working process Section -->
    <!-- start: Faq Section -->
    <section id="faqs" class="tj-faq-section-2 section-gap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="content-wrap">
                        <div class="sec-heading">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-subtitle-2"></i>Faq</span>
                            <h2 class="sec-title text-anim">Preguntas frecuentes</h2>
                        </div>
                        <p class="desc wow fadeInUp" data-wow-delay=".4s">Sabemos que al momento de contratar un
                            servicio web surgen dudas. Aquí respondemos las más comunes para que tengas toda la claridad
                            y confianza antes de dar el siguiente paso.</p>
                        <button id="btnCalendly" class="tj-primary-btn style-2 wow fadeInUp" data-wow-delay=".5s"
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/massuttier/informacion-sitio-web'});return false;">
                            <div class="btn-inner">
                                <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                <span class="btn-text">Agendar tu llamada</span>
                                <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion tj-faq style-2" id="faqOne">
                        <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                                    aria-expanded="true">¿Por qué necesito una página web profesional si ya tengo redes
                                sociales?
                            </button>
                            <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                                <div class="accordion-body faq-text">
                                    <p>Tener presencia en redes es importante, pero una web profesional es tu espacio
                                        propio: te da credibilidad, te posiciona en Google y te permite vender sin
                                        depender de algoritmos o cambios en plataformas externas. Las redes atraen
                                        atención, tu web convierte esa atención en clientes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-2"
                                    aria-expanded="false">¿Cuánto tiempo tarda en estar lista mi página web?
                            </button>
                            <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                                <div class="accordion-body faq-text">
                                    <p>El tiempo depende del tipo de proyecto. Una landing page puede estar lista en 1 a
                                        2 semanas, mientras que un sitio web corporativo completo puede tardar entre 3 y
                                        5 semanas. Nuestro proceso está diseñado para ser ágil, manteniendo siempre la
                                        calidad y cumpliendo los plazos acordados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-3"
                                    aria-expanded="false">¿Qué incluye el servicio de diseño y desarrollo web?
                            </button>
                            <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                                <div class="accordion-body faq-text">
                                    <p>Incluye diseño profesional, desarrollo optimizado (responsive y rápido),
                                        integración de formularios de contacto, optimización SEO básica, capacitación
                                        para gestionar tu contenido y soporte técnico inicial. También podemos añadir
                                        extras como tienda en línea, blogs o integración con CRM.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-4"
                                    aria-expanded="false">¿Podré hacer cambios en mi web sin depender de ustedes?
                            </button>
                            <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                                <div class="accordion-body faq-text">
                                    <p>Sí. Nuestras páginas incluyen un panel de gestión sencillo (CMS) para que puedas
                                        actualizar textos, imágenes o publicaciones sin conocimientos técnicos. Y si
                                        prefieres, también ofrecemos planes de mantenimiento para que no tengas que
                                        preocuparte por nada.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-5"
                                    aria-expanded="false">¿Qué pasa si necesito soporte después de entregar la web?
                            </button>
                            <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                                <div class="accordion-body faq-text">
                                    <p>No te dejamos solo. Tienes soporte inicial gratuito, y si deseas podemos
                                        ofrecerte planes de soporte continuo, que incluyen actualizaciones, mejoras y
                                        respaldo. Así tu web siempre estará al día y funcionando al 100%.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Faq Section -->

    <!-- start: Gallery Section -->
    <section class="tj-gallery-section section-gap-x wow fadeInUp" id="portafolio" data-wow-delay=".4s">
        <div class="container-fluid gx-md-0">
            <div class="row">
                <div class="col-12">
                    <div class="swiper gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-1.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-2.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-3.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-4.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-5.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-6.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-7.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-8.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-9.webp" alt="Image">

                                </div>
                            </div>
                            <div class="swiper-slide gallery-item">
                                <div class="gallery-img">
                                    <img src="storage/assets/images/gallery/gallery-10.webp" alt="Image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Gallery Section -->
@endsection
@push('scripts')
    <script>
        const calendlyBtn = document.getElementById('btnCalendly');
        calendlyBtn.addEventListener('click', function () {
            // Meta Pixel
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Schedule', {content_name: 'Calendly', value: 0, currency: 'MXN'});
            }

            // GA4
            if (typeof gtag !== 'undefined') {
                gtag('event', 'schedule', {                  // nombre del evento en GA4
                    method: 'calendly',                        // parámetro recomendado
                    link_url: this.href,                       // útil para reportes
                    ctalabel: 'Agenda tu llamada'              // etiqueta opcional
                });
            }
        });
    </script>
@endpush
