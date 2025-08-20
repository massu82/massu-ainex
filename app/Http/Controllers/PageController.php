<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

// al admin
use App\Mail\ContactConfirmation;

// al usuario

class PageController extends Controller
{
    public function index()
    {
        //return view('index', ['showPreloader' => true]);
        return redirect()->route('landing_web');
    }

    public function confirmacion_llamada()
    {
        return view('web.confirmacion_llamada', ['showPreloader' => false]);
    }

    public function contacto()
    {
        return view('contacto', ['showPreloader' => false]);
    }

    public function submitContact(Request $request)
    {
        // Honeypot simple
        if ($request->filled('website')) {
            return back()->withErrors(['general' => 'Error de validación.'])->withInput();
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:40'],
            'company' => ['nullable', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Tu nombre es obligatorio.',
            'email.required' => 'Tu email es obligatorio.',
            'email.email' => 'Proporciona un email válido.',
            'message.required' => 'Cuéntanos en qué te ayudamos.',
        ]);

        // Envía al administrador
        $admin = config('mail.admin_address', env('ADMIN_EMAIL'));
        if ($admin) {
            Mail::to($admin)->send(new ContactNotification($data));
            // Para colas: Mail::to($admin)->queue(new ContactNotification($data));
        }

        // Confirmación al usuario
        Mail::to($data['email'])->send(new ContactConfirmation($data));

        // (Opcional) persistir en BD si quieres
        // ContactMessage::create($data);

        return redirect()->route('contacto.show')->with('contact_sent', true);
    }


    public function landing_web()
    {
        return view('web.landing', ['showPreloader' => true]);
    }
}
