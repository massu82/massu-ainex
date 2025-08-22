@props([
    'primaryUrl' => config('services.calendly_url'),
    'primaryText' => 'Agendar llamada gratuita (15 min)',
    'secondaryUrl' => 'https://wa.me/524422593837',
    'secondaryText' => 'Prefieres WhatsApp? Escríbenos ahora',
    'scrollOffset' => 200,
    'gaCategory' => 'cta_fixed',
    'location' => 'mobile_bottom'
])

<div
    x-data="{ show: false }"
    x-init="window.addEventListener('scroll', () => { show = window.scrollY > {{ $scrollOffset }} })"
    data-cta-fixed
    data-cta-offset="{{ $scrollOffset }}"
    data-cta-ga-category="{{ $gaCategory }}"
    data-cta-location="{{ $location }}"
    data-cta-primary-text="{{ $primaryText }}"
    data-cta-secondary-text="{{ $secondaryText }}"
>
    <div x-show="show" x-transition class="cta-fixed-container">
        <a href="{{ $primaryUrl }}" target="_blank" class="cta-btn cta-btn-primary" data-cta-primary>
            {{ $primaryText }}
        </a>
        <a href="{{ $secondaryUrl }}" target="_blank" class="cta-btn cta-btn-secondary" data-cta-secondary>
            {{ $secondaryText }}
        </a>
    </div>
</div>

<style>
    .cta-fixed-container {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background: #ffffff;
        border-top: 1px solid #e5e5e5;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .cta-btn {
        display: inline-block;
        text-align: center;
        padding: 12px;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: transform .15s ease, background-color .2s ease;
    }

    .cta-btn:active {
        transform: scale(0.98);
    }

    .cta-btn-primary {
        background-color: #ff007f;
        color: #fff;
    }

    .cta-btn-primary:hover {
        background-color: #e60073;
    }

    .cta-btn-secondary {
        background-color: #f7f7f7;
        color: #333;
        border: 1px solid #ddd;
        font-size: 14px;
        font-weight: 500;
    }

    .cta-btn-secondary:hover {
        background-color: #ebebeb;
    }

    @media (min-width: 768px) {
        .cta-fixed-container {
            display: none;
        }
    }
</style>

<script>
    (function () {
        function trackGA(eventName, params) {
            if (typeof window.gtag === 'function') {
                window.gtag('event', eventName, params || {});
            }
        }

        function trackFB(eventName, params) {
            if (typeof window.fbq === 'function') {
                window.fbq('trackCustom', eventName, params || {});
            }
        }

        function ctx() {
            return {
                page_path: window.location.pathname,
                page_url: window.location.href,
                title: document.title
            };
        }

        function setup() {
            var root = document.querySelector('[data-cta-fixed]');
            if (!root) return;

            var offset = parseInt(root.dataset.ctaOffset || '200', 10);
            var category = root.dataset.ctaGaCategory || 'cta_fixed';
            var location = root.dataset.ctaLocation || 'mobile_bottom';
            var primaryText = root.dataset.ctaPrimaryText;
            var secondaryText = root.dataset.ctaSecondaryText;

            var primaryBtn = root.querySelector('[data-cta-primary]');
            var secondaryBtn = root.querySelector('[data-cta-secondary]');

            if (primaryBtn) {
                primaryBtn.addEventListener('click', function () {
                    var params = {cta_variant: 'primary', cta_text: primaryText, location, category, ...ctx()};
                    trackGA('cta_click', params);
                    trackFB('CTA Primary Click', params);
                });
            }
            if (secondaryBtn) {
                secondaryBtn.addEventListener('click', function () {
                    var params = {cta_variant: 'secondary', cta_text: secondaryText, location, category, ...ctx()};
                    trackGA('cta_click', params);
                    trackFB('CTA Secondary Click', params);
                });
            }

            // Impression solo una vez
            var sent = false;

            function impression() {
                if (sent) return;
                if (window.scrollY > offset) {
                    sent = true;
                    var params = {location, category, ...ctx()};
                    trackGA('cta_fixed_impression', params);
                    trackFB('CTA Fixed Impression', params);
                }
            }

            window.addEventListener('scroll', impression, {passive: true});
            setTimeout(impression, 100);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setup);
        } else {
            setup();
        }
    })();
</script>
