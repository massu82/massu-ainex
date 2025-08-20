@component('mail::message')
    # Nuevo contacto

    **Nombre:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}
    **Teléfono:** {{ $data['phone'] ?? '—' }}
    **Compañía:** {{ $data['company'] ?? '—' }}

    **Mensaje:**
    > {{ $data['message'] }}

    @component('mail::button', ['url' => config('app.url') ])
        Abrir sitio
    @endcomponent

    Gracias,<br>
    {{ config('app.name') }}
@endcomponent
