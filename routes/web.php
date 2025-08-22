<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    //Route::get('/contacto', 'contacto')->name('contacto');
    Route::get('/contacto', 'contacto')->name('contacto.show');
    Route::post('/contacto', 'submitContact')
        ->middleware('throttle:10,1') // anti-spam simple
        ->name('contact.submit');
    Route::get('/agendar-llamada', 'landing_web')->name('landing_web');
    Route::get('/confirmacion-llamada', 'confirmacion_llamada')->name('confirmacion-llamada');
    //WhatsApp
    Route::get('/wa/on', function (Request $request) {
        session(['wa_enabled' => true]);
        return back();
    })->name('wa.on');

    Route::get('/wa/off', function (Request $request) {
        session()->forget('wa_enabled');
        return back();
    })->name('wa.off');

    Route::get('/wa', function (Request $request) {
        $phone = config('services.whatsapp_phone', env('WHATSAPP_NUMBER', '5214422593837'));
        $msg = rawurlencode('Hola, me interesa una asesoría con Massuttier 🚀' . "\n\nPágina: " . url()->previous());
        return redirect("https://wa.me/{$phone}?text={$msg}");
    })->name('wa.chat');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
