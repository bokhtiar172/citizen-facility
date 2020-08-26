<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class govt extends Mailable
{
    use Queueable, SerializesModels;
    public $notice;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notice)
    {
        $this->notice=$notice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.govt');
    }
}
