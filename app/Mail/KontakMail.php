<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class KontakMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject($this->data['subject'])
            ->view('emails');
    }
}
