<?php

namespace App\Http\Controllers;


use App\Mail\mailPrecos;
use App\Mail\mailPrimeiraResposta;
use App\Mail\mailRecebeOrcamento;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function store()
    {
        $data = json_decode(json_encode($_POST));
        Mail::send(new mailPrimeiraResposta($data));
        Mail::send(new mailRecebeOrcamento($data));

        echo "1;Enviado com sucesso!";
    }
    public function envia_precos()
    {
        $_POST['email'] = "joaomarceloauerback@gmail.com";
        $_POST['nome'] = "João Marcelo";
        $_POST['subject'] = "TABELA DE PREÇOS";
        $_POST['body'] = "TABELA DE PREÇOS";
        $data = json_decode(json_encode($_POST));
        Mail::send(new mailPrecos($data));
        echo "1;Enviado com sucesso!";
    }
    public function index()
    {
        echo "index!";
    }
}
