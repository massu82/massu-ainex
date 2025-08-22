<!-- start: Footer Section -->
<footer class="tj-footer-section footer-1 section-gap-x">
    <div class="footer-top-shape"></div>
    <div class="footer-main-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-col-1">
                        <div class="footer-logo">
                            <a href="{{route('index')}}">
                                <img src="storage/assets/images/logos/logo.webp" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p>En <strong>Massuttier</strong> transformamos ideas en resultados. Diseñamos renders arquitectónicos que
                                venden por sí solos, desarrollamos sitios web profesionales en Laravel con CMS a medida
                                y lanzamos campañas digitales que generan clientes reales.
                            </p>
                        </div>
                        <div class="social-links style-2">
                            <ul>
                                <li><a href="https://www.facebook.com/studiomassuttier" target="_blank"><i
                                            class="tji-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class="tji-linkedin"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/studiomassuttier/" target="_blank"><i
                                            class="tji-instagram"></i></a></li>
                                <li><a href="https://x.com/aamassuttier" target="_blank"><i
                                            class="tji-x-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-6">
                    <div class="footer-widget widget-nav-menu footer-col-2">
                        <h5 class="title">Menú</h5>
                        <ul>
                            <li><a href="#nosotros" class="btn-inner">Nosotros</a></li>
                            <li><a href="#clientes" class="btn-inner">Clientes</a></li>
                            <li><a href="#testimonios" class="btn-inner">Testimonios</a></li>
                            <li><a href="#portafolio" class="btn-inner">Portafolio</a></li>
                            <li><a href="#faqs" class="btn-inner">Faqs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget widget-nav-menu footer-col-3">
                        <h5 class="title">Servicios</h5>
                        <ul>
                            <li><a href="#">Desarrollo Web</a></li>
                            <li><a href="#">Marketing Digital</a></li>
                            <li><a href="#">Hosting</a></li>
                            <li><a href="#">CRM/ERP</a></li>
                            <li><a href="#">Rendering</a></li>
                            <li><a href="#">Clouding</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-3 col-md-6">
                    <div class="footer-widget widget-subscribe footer-col-4">
                        <h3 class="title">Suscríbete a nuestro newsletter.</h3>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" name="email" placeholder="Enter email*">
                                <button type="submit"><i class="tji-plane"></i></button>
                                <label for="agree"><input id="agree" type="checkbox">¿Aceptas los <a href="#">Términos y Condiciones?</a></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-copyright-area">
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-content-area">
                            <div class="copyright-text">
                                <p>&copy; {{ date('Y') }}&nbsp;<a href="https://massuttier.com.mx"
                                                                  target="_blank">{{ config('app.name') }}</a>
                                    Todos los derechos reservados</p>
                            </div>
                            <div class="copyright-menu">
                                <ul>
                                    <li><a href="#">Aviso de Privacidad</a></li>
                                    <li><a href="#">Términos y condiciones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end: Footer Section -->

