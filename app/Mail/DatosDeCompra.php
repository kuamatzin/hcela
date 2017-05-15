<?php

namespace HerramientasCela\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DatosDeCompra extends Mailable
{
    use Queueable, SerializesModels;

    public $amount;
    public $items;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($amount, $items)
    {
        $this->amount = $amount;
        $this->items = $items;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.datosdecompra')->with(['amount' => $this->amount, 'items' => $this->items]);
    }
}
