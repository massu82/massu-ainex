@extends('layouts.ainex')
@section('title','Confirmación de cita | Massuttier - Tu web lista para generar clientes')
@section('description','Registro confirmado. En Massuttier diseñamos y optimizamos sitios web profesionales para que tu negocio crezca en internet.')
@section('image'){{asset('storage/assets/images/img-share.png')}}@endsection
@section('content')
    <!-- start: Breadcrumb Section -->
    <x-page-header
        title="Confirmación de Llamada"
        bg-image="storage/assets/images/bg/pheader-bg.webp"
        :items="[
        ['label' => 'Inicio', 'url' => route('index')],
        ['label' => 'Confirmación de Llamada']
    ]"
    />

    <!-- end: Breadcrumb Section -->

    <!-- start: About Section -->
    <section class="tj-about-section-2 section-gap-top section-gap-x">
        <div class="about-wrapper">
            <div class="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-content-area style-2">
                                <div class="sec-heading style-2">
                                    <span class="sub-title wow fadeInUp"
                                          data-wow-delay=".3s">Confirmación exitosa</span>
                                    <h2 class="sec-title text-anim">Tendrás tu asesoría
                                        personalizada con Massuttier. Diseñamos sitios web optimizados y estrategias
                                        digitales efectivas.</h2>
                                </div>
                                <div class="about-bottom-area-2">
                                    <div class="company-logo wow fadeInLeft" data-wow-delay=".3s">
                                        <img src="storage/assets/images/logos/logo-2.webp" alt="Image">
                                    </div>
                                    <div class="mission-vision-wrap">
                                        <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                            <h4 class="title">Nuestra Misión</h4>
                                            <p class="desc">En Massuttier nuestra misión es impulsar a emprendedores y
                                                empresas a crecer en el mundo digital mediante sitios web profesionales,
                                                rápidos y optimizados para SEO, complementados con estrategias de
                                                marketing digital que convierten visitantes en clientes y generan
                                                resultados reales.
                                            </p>
                                        </div>
                                        <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                                            <h4 class="title">Nuestra Visión</h4>
                                            <p class="desc">Nuestra visión en Massuttier es consolidarnos como la
                                                agencia digital líder en México y Latinoamérica, reconocida por crear
                                                soluciones web innovadoras y estrategias de marketing que posicionen a
                                                las marcas en internet y las ayuden a alcanzar un crecimiento
                                                sostenible.
                                            </p>
                                        </div>
                                        <a class="tj-primary-btn style-2 wow fadeInUp" data-wow-delay=".5s"
                                           href="{{route('contacto.show')}}">
                                            <div class="btn-inner">
                                                <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                                <span class="btn-text">Escríbenos</span>
                                                <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-img-area">
                    <div class="about-img wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="0.8s">
                        <img src="storage/assets/images/about/about-img-2.webp" alt="Image">
                    </div>
                </div>
            </div>
            <div class="marquee-area">
                <div class="swiper marquee-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Redefining</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Revolution</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Intelligence</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Redefining</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Revolution</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h4 class="marquee-text">Intelligence</h4>
                            <div class="marquee-icon">
                                <i class="tji-marquee-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: About Section -->

    <x-cta-footer
        title="El momento de escalar es ahora"
        link="{{ route('contacto.show') }}"
        button-text="Empieza ahora"
        image="storage/assets/images/cta/custom-bg.webp"
    />

@endsection
@push('scripts')
    <script>
        // Evento estándar de lead:
        massTrack('generate_lead', {method: 'contact_form'});
    </script>
@endpush
