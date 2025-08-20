<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('¡Recibimos tu mensaje! | Massuttier')
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->markdown('emails.contact.confirmation', ['data' => $this->data]);
    }
}
