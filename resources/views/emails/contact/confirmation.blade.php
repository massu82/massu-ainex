@component('mail::message')
    # ¡Gracias por escribirnos, {{ $data['name'] }}!

    Hemos recibido tu mensaje y uno de nuestros expertos se pondrá en contacto contigo muy pronto.
    Mientras tanto, puedes conocer más sobre nuestros servicios y proyectos.

    @component('mail::button', ['url' => url('/servicios') ])
        Ver servicios
    @endcomponent

    Si no fuiste tú quien envió este mensaje, ignora este correo.

    Saludos,
    **{{ config('app.name') }}**
@endcomponent
