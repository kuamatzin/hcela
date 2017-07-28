<?php

namespace HerramientasCela\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $contact_message;
    public $corp_name;
    public $state;
    public $city;
    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->name = htmlentities($datos['name']);
        $this->email = htmlentities($datos['email']);
        $this->contact_message = htmlentities($datos['message']);
        $this->corp_name = htmlentities($datos['corp_name']);
        $this->state = htmlentities($datos['state']);
        $this->city = htmlentities($datos['city']);
        $this->phone = htmlentities($datos['phone']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contacto');
    }
}
