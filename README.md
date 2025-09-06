# massu-ainex

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## WhatsApp Funnel (Mermaid)

```mermaid
flowchart TD
    A[Campaña Meta/Google<br/>Click-to-WhatsApp] -->|wa.me link| B[WhatsApp Cloud API / 360dialog]

    B --> C[Webhook entrante<br/>Make/Zapier Scenario]

    C --> D[Mensaje de bienvenida automático<br/>"Catálogo / Cita / Asesor"]

    D --> E{Respuesta del lead}
    E -->|Nombre + Email| F[Guardar en Google Sheets<br/>(Nombre, Tel, Email, Intención, Fecha)]
    F --> G[Notificación interna<br/>(Email/Telegram)]

    E -->|Opción Catálogo| H[Enviar PDF/Link al Catálogo]
    E -->|Opción Cita| I[Calendly Link]
    E -->|Opción Asesor| J[Aviso Interno<br/>Equipo Comercial]

    G --> K[Meta Pixel/GA4<br/>Evento 'Lead']
    H --> K
    I --> K
    J --> K
