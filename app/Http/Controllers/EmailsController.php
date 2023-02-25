<?php

namespace App\Http\Controllers;


use App\Mail\mailPrimeiraResposta;
use App\Mail\mailRecebeOrcamento;
use App\Mail\MenssagemEnvia;
use App\Mail\PedeOrcamento;
use App\Models\forms\Contato;
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

    public function pedeOrcamento()
    {
        try {
            $data = json_decode(json_encode($_POST));
            $dataContato = new Contato($data->name, $data->email, $data->event, $data->date, $data->hours, $data->locale, $data->message, $data->phone);
            Mail::send(new PedeOrcamento($dataContato));
            Mail::send(new MenssagemEnvia($dataContato));
            echo "1;Enviado com sucesso!";
        }catch (\Exception $exception){
            die($exception);
        }

    }

    public function index()
    {
        echo "index!";
    }
}
