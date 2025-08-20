@props([
  'id' => config('services.ga4_id'),
  'sendPageView' => true, // envía PageView por defecto
])

@once
    @if($id)
        <!-- GA4 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            @if($sendPageView)
            gtag('config', '{{ $id }}');
            @else
            // Si no deseas PageView automático:
            gtag('config', '{{ $id }}', {'send_page_view': false});
            @endif
            // Helper global para eventos (usa el mismo nombre en toda tu app)
            window.massTrack = function (eventName, params) {
                try {
                    if (typeof gtag === 'function') gtag('event', eventName, params || {});
                } catch (e) {
                }
                try {
                    if (typeof fbq === 'function') fbq('trackCustom', eventName, params || {});
                } catch (e) {
                }
            }
        </script>
    @endif
@endonce
