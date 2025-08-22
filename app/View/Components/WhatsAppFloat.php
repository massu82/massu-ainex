<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhatsAppFloat extends Component
{
    public function __construct(
        public string $phone = '',
        public string $message = '¡Hola! Me interesa mejorar mi sitio web con Massuttier 🚀',
        public string $position = 'br',
        public string $tooltip = 'Chatea por WhatsApp',
        public bool   $showOnDesktop = true,
        public bool   $showOnMobile = true,
        public int    $size = 64,
        public bool   $bubble = false,
        public string $bubbleGreeting = '¿Necesitas una web que venda más? 💬',
        public string $bubbleCta = 'Escríbenos por WhatsApp',
        public int    $bubbleDelay = 0,
    )
    {
        $this->phone = $phone ?: config('services.whatsapp_phone', env('WHATSAPP_NUMBER', '5214422593837'));
    }

    public function render(): View|Closure|string
    {
        return view('components.whatsapp-float');
    }
}
