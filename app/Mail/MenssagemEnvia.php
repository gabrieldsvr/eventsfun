<?php

namespace App\Mail;

use App\Models\forms\Contato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MenssagemEnvia extends Mailable
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
        $this->subject("ORÇAMENTO");
        $this->to($this->data->getEmail(), "Automático");
        return $this->view('mail.email_primeira_resposta', ['data' => $this->data]);
    }
}
