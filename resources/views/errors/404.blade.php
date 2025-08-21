@extends('layouts.ainex')
@section('title','Página no encontrada | Massuttier - Soluciones Web y Marketing Digital')
@section('description','La página que buscas no existe o fue movida. Descubre cómo en Massuttier creamos sitios web profesionales, optimizados para SEO y diseñados para generar más clientes.')
@section('image'){{asset('storage/assets/images/img-share.png')}}@endsection
@section('content')
    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header section-gap-x" data-bg-image="assets/images/bg/pheader-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title">Error 404</h1>
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                  <a href="{{route('index')}}">Home</a>
                </span>
                            <span>/</span>
                            <span>
                  <span>Error 404</span>
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Error Section -->
    <section class="tj-error-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tj-error-wrap text-center">
                        <div class="tj-error-content">
                            <div class="error-img">
                                <img src="storage/assets/images/404/error.webp" alt="">
                            </div>
                            <h2 class="error-title text-anim">Oops... Esta página no existe</h2>
                            <div class="error-desc">Tal vez esta página desapareció, pero tu oportunidad de crecer en
                                línea no. En Massuttier creamos sitios web optimizados para SEO, rápidos y listos para
                                generar ventas.
                            </div>
                            <a class="tj-primary-btn error-btn" href="{{route('index')}}">
                                <div class="btn-inner">
                                    <span class="btn-icon h-icon"><i class="tji-home"></i></span>
                                    <span class="btn-text">Back to Home Page</span>
                                    <span class="btn-icon"><i class="tji-home"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Error Section -->

    <!-- start: Cta Section -->
    <section class="tj-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area wow fadeInUp" data-wow-delay=".3s">
                        <div class="cta-content">
                            <h2 class="title">Ready to Elevate Your Business with AI?</h2>
                            <a class="tj-primary-btn btn-light" href="#">
                                <div class="btn-inner">
                                    <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                    <span class="btn-text">Get Started Today</span>
                                    <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                                </div>
                            </a>
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

@endsection
