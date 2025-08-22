@props([
  'phone' => config('services.whatsapp_phone', env('WHATSAPP_NUMBER', '5214422593837')),
  'message' => '¡Hola! Me interesa mejorar mi sitio web con Massuttier 🚀',
  'position' => 'br',
  'tooltip' => 'Chatea por WhatsApp',
  'showOnDesktop' => true,
  'showOnMobile' => true,
  'size' => 64,
  'bubble' => false,
  'bubbleGreeting' => '¿Necesitas una web que venda más? 💬',
  'bubbleCta' => 'Escríbenos por WhatsApp',
  'bubbleDelay' => 0,
])

@php
    $encoded = rawurlencode($message . "\n\nPágina: " . request()->fullUrl());
    $href = "https://wa.me/{$phone}?text={$encoded}";
    $posClasses = match($position) {
      'bl' => 'left-4 bottom-4',
      'tr' => 'right-4 top-4',
      'tl' => 'left-4 top-4',
      default => 'right-4 bottom-4',
    };
    $visibility = trim(($showOnDesktop ? '' : 'md:hidden') . ' ' . ($showOnMobile ? '' : 'hidden md:block'));
@endphp

<div x-data="waFloat()" x-init="init({ delay: {{ (int) $bubbleDelay }} })"
     class="fixed {{ $posClasses }} z-50 {{ $visibility }}">
    <a href="{{ $href }}" target="_blank" rel="noopener nofollow"
       aria-label="Abrir chat de WhatsApp"
       @click="track('button')"
       class="group relative inline-flex items-center justify-center rounded-full shadow-lg transition
            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-400
            hover:scale-[1.03] active:scale-95"
       :style="`width:${size}px;height:${size}px;background-color:#25D366;`">
        <svg width="60%" height="60%" viewBox="0 0 32 32" aria-hidden="true" class="fill-white drop-shadow">
            <path
                d="M19.11 17.42c-.31-.16-1.82-.9-2.1-1.01-.28-.1-.48-.16-.68.16-.2.31-.78 1.01-.96 1.22-.18.2-.36.23-.67.08-.31-.16-1.31-.48-2.49-1.53-.92-.82-1.54-1.84-1.72-2.15-.18-.31-.02-.48.14-.63.14-.14.31-.36.46-.54.16-.18.2-.31.31-.52.1-.2.05-.39-.03-.54-.08-.16-.68-1.64-.93-2.24-.24-.58-.49-.5-.68-.5l-.58-.01c-.2 0-.52.08-.79.39-.27.31-1.04 1.01-1.04 2.47 0 1.45 1.07 2.86 1.22 3.06.16.2 2.11 3.2 5.1 4.49.71.31 1.26.5 1.69.64.71.23 1.36.2 1.87.12.57-.08 1.82-.74 2.08-1.46.26-.72.26-1.34.18-1.46-.07-.12-.26-.2-.57-.36zM26.63 5.36C23.87 2.6 20.21 1 16.31 1 8.73 1 2.62 7.12 2.62 14.69c0 2.32.61 4.59 1.77 6.6L2 31l9.92-2.6c1.94 1.06 4.14 1.62 6.38 1.62h.01c7.58 0 13.69-6.12 13.69-13.69 0-3.9-1.6-7.56-4.36-10.32zM16.31 28.87h-.01c-2.06 0-4.08-.55-5.84-1.6l-.42-.25-5.89 1.55 1.57-5.75-.27-.44a12.08 12.08 0 0 1-1.83-6.68c0-6.69 5.44-12.13 12.13-12.13 3.24 0 6.28 1.26 8.57 3.54a12.04 12.04 0 0 1 3.56 8.57c0 6.69-5.44 12.13-12.13 12.13z"/>
        </svg>
        <span class="absolute -top-1 -right-1 block h-3 w-3 rounded-full bg-emerald-400 ring-2 ring-white"></span>
        <span class="pointer-events-none absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap
                 rounded-md bg-black/80 px-2 py-1 text-xs text-white opacity-0 transition
                 group-hover:opacity-100">{{ $tooltip }}</span>
    </a>

    @if($bubble)
        <div x-cloak
             class="mt-2 w-72 rounded-2xl border border-zinc-200/70 bg-white/95 shadow-xl backdrop-blur supports-[backdrop-filter]:bg-white/80"
             x-show="open" x-transition @keydown.escape.window="close()">
            <div class="flex items-start gap-3 p-3">
                <div class="shrink-0 mt-0.5 h-8 w-8 rounded-full" style="background:#25D366"></div>
                <div class="min-w-0">
                    <p class="text-sm font-semibold text-zinc-900">Massuttier</p>
                    <p class="mt-0.5 text-sm text-zinc-700">{{ $bubbleGreeting }}</p>
                </div>
                <button type="button" @click="dismiss()" class="ml-auto text-zinc-400 hover:text-zinc-600"
                        aria-label="Cerrar">
                    <svg viewBox="0 0 20 20" class="h-5 w-5">
                        <path fill="currentColor"
                              d="M6.28 5.22 10 8.94l3.72-3.72 1.06 1.06L11.06 10l3.72 3.72-1.06 1.06L10 11.06l-3.72 3.72-1.06-1.06L8.94 10 5.22 6.28z"/>
                    </svg>
                </button>
            </div>
            <div class="px-3 pb-3">
                <a href="{{ $href }}" target="_blank" rel="noopener nofollow" @click="track('bubble_cta')"
                   class="block w-full rounded-xl bg-emerald-500 px-3 py-2 text-center text-sm font-semibold text-white shadow hover:bg-emerald-600">
                    {{ $bubbleCta }}
                </a>
                <p class="mt-2 text-[11px] leading-4 text-zinc-500">Horario de atención: 9:00–18:00 (CDMX). Respondemos
                    lo antes posible.</p>
            </div>
        </div>
    @endif
</div>

<script>
    function waFloat() {
        return {
            open: false,
            size: {{ (int) $size }},
            init(opts = {}) {
                const dismissed = localStorage.getItem('wa_bubble_dismissed') === '1';
                if (!dismissed && Number(opts.delay) > 0) {
                    setTimeout(() => {
                        this.open = true
                    }, Number(opts.delay));
                }
            },
            close() {
                this.open = false
            },
            dismiss() {
                this.open = false;
                localStorage.setItem('wa_bubble_dismissed', '1')
            },
            track(where) {
                if (window.dataLayer) {
                    dataLayer.push({event: 'wa_click', wa_location: where});
                }
                if (window.fbq) {
                    fbq('trackCustom', 'WhatsAppClick', {location: where});
                }
            }
        }
    }
</script>
