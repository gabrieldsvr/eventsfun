<?php

namespace App\Mail;

use App\Models\forms\Contato;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PedeOrcamento extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->data->getSubject());
        $this->to("contato.4funeventos@gmail.com", "contato via site - " . $this->data->getName());
        return $this->view('mail.email_recebimento', ['data' => $this->data]);
    }
}
