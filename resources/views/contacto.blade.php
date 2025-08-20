@extends('layouts.ainex')
@section('title','Contacto | Massuttier - Tu web lista para generar clientes')
@section('description','Contacto. En Massuttier diseñamos y optimizamos sitios web profesionales para que tu negocio crezca en internet.')
@section('image','')
@section('content')
    <!-- start: Breadcrumb Section -->
    <x-page-header
        title="Contacto"
        bg-image="storage/assets/images/bg/pheader-bg.webp"
        :items="[
        ['label' => 'Inicio', 'url' => route('index')],
        ['label' => 'Contacto']
    ]"
    />

    <!-- end: Breadcrumb Section -->
    <!-- start: Contact Top Section -->
    <div class="tj-contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title"><i class="tji-subtitle"></i>Contáctenos</span>
                        <h2 class="sec-title">Hablemos de tu próximo proyecto digital</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2">
                        <div class="contact-icon">
                            <i class="tji-location"></i>
                        </div>
                        <h3 class="contact-title">Dirección</h3>
                        <p>Cto. Interior Melchor Ocampo, Verónica Anzúres, Miguel Hidalgo, 11300 Ciudad de México,
                            CDMX</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2">
                        <div class="contact-icon">
                            <i class="tji-envelop"></i>
                        </div>
                        <h3 class="contact-title">Escríbenos</h3>
                        <ul class="contact-list">
                            <li><a href="mailto:soporte@massuttier.com.mx">soporte@massuttier.com.mx</a></li>
                            <li><a href="mailto:contacto@massuttier.com.mx">contacto@massuttier.com.mx</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2">
                        <div class="contact-icon">
                            <i class="tji-phone"></i>
                        </div>
                        <h3 class="contact-title">Llámanos</h3>
                        <ul class="contact-list">
                            <li><a href="tel:4271344370">+52 (427) 1344370 </a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2">
                        <div class="contact-icon">
                            <i class="tji-whatsapp"></i>
                        </div>
                        <h3 class="contact-title">WhatsApp</h3>
                        <ul class="contact-list">
                            <li><a class="contact-link" href="https://wa.me/524422593837"
                                   target="_blank">+524422593837</a></li>
                            <li class="active"><a href="https://wa.me/524422593837" target="_blank">Necesitas ayuda?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Contact Top Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section-2 section-gap-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h3 class="title">Contáctanos y lleva tu negocio al siguiente nivel</h3>
                        @if(session('contact_sent'))
                            <p> ¡Gracias! Hemos recibido tu mensaje. Te contactaremos muy pronto.</p>
                        @endif
                        <form action="{{ route('contact.submit') }}" method="post" id="contact-form">
                            @csrf
                            {{-- Honeypot (anti-bots) --}}
                            <div class="hidden">
                                <label>Deja este campo vacío</label>
                                <input type="text" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                               placeholder="Nombre Completo *" required>
                                        @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                               placeholder="Correo elctrónico *" required>
                                        @error('email') <p
                                            class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="phone" value="{{ old('phone') }}"
                                               placeholder="Teléfono">
                                        @error('phone') <p
                                            class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="company" value="{{ old('company') }}"
                                               placeholder="Compañia">
                                        @error('company') <p
                                            class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="message" id="message" placeholder="Mensaje *"
                                                  required></textarea>
                                        @error('message') <p
                                            class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <div class="btn-inner">
                                            <span class="btn-icon h-icon"><i class="tji-arrow-right"></i></span>
                                            <span class="btn-text">Enviar mensaje</span>
                                            <span class="btn-icon"><i class="tji-arrow-right"></i></span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4600229449584!2d-99.17310228744056!3d19.435723281768563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9947f2de74d%3A0x5d0acb90ab473045!2sEdificio%20Privanza!5e0!3m2!1ses!2smx!4v1755715996334!5m2!1ses!2smx"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->

    <x-cta-footer
        title="Agenda una llamada gratuita con un experto"
        link="{{ route('index') }}"
        button-text="Empieza ahora"
        image="storage/assets/images/cta/custom-bg.webp"
    />

@endsection
@push('scripts')
    @if (session('contact_sent'))
        <script>
            massTrack('generate_lead', {method: 'contact_form'});
            // Si también quieres un evento Meta estándar:
            try {
                fbq('track', 'Lead', {content_name: 'Contact Form', status: 'success'});
            } catch (e) {
            }
        </script>
    @endif
@endpush


