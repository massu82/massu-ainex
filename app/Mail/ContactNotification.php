<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nuevo contacto desde Massuttier')
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->markdown('emails.contact.notification', ['data' => $this->data]);
    }
}
