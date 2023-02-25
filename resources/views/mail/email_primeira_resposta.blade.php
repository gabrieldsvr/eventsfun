<?php

$date = new DateTime('now')
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap");

    p {
        font-family: "Poppins", sans-serif !important;
        font-weight: 400;
        font-size: 0.875rem;
        color: #58585e;
        letter-spacing: 0.015rem;
        margin-bottom: 10px;
    }</style>
<div>
    <table style="width: 550px;height: 100%;margin: 0 auto" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr style="border-bottom:1px dashed #ddd">
            <td style="width: 175px;height: 20px;font-family: Roboto;font-size: 18px;font-weight: 500;font-style: normal;font-stretch: normal;line-height: 1.11;letter-spacing: normal;text-align: center;color: #001737;padding-bottom: 22px"></td>
        </tr>
        <tr>
            <td style="padding-top: 20px; padding-left: 20px">
                <h4 style="color: #fdc007">4FUN Eventos</h4>
                <p style="font-family: Roboto;font-size: 13px;font-weight: 500;font-style:
                                  normal;font-stretch: normal;line-height: normal;letter-spacing: normal;color:
                                  #bbb;float:right;margin-top: 10px; padding-right: 20px"><?= $date->format('d/m/Y')?></p>
            </td>
        </tr>
        <tr>
            <td style="border-radius: 10px;background: #fff;padding: 30px 60px 20px 60px;margin-top: 10px;display: block;">
                <p style="font-family: Roboto;font-size: 18px;font-weight: 500;font-style: normal;font-stretch: normal;line-height: 1.11;letter-spacing: normal;color: #fdc007;">PEDIDO DE ORÇAMENTO RECEBIDO</p>
                <p style="font-family: Roboto;font-size: 14px;font-weight: 500;font-style:
                                  normal;font-stretch: normal;line-height: 1.71;letter-spacing: normal;color: #001737;margin-bottom: 10px;"><?=$data->getName()?></p>
                <p style="font-family: Roboto;font-size: 14px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: 1.71;letter-spacing: normal;color: #001737;">
                    Obrigado por entrar em contato! Nossa equipe fará o possível para fornecer-lhe um orçamento o mais rápido possível, geralmente dentro de 24 horas úteis.</p>
                <p style="font-family: Roboto;font-size: 14px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: 1.71;letter-spacing: normal;color: #bbbbbb;">
                    Este é um e-mail gerado automaticamente. Não responda a este e-mail. Se você enfrentar algum problema, entre em contato conosco em contato.4funeventos@gmail.com</p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
