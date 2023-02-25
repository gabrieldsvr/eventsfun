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
        <tr>
            <td>Nome</td>
            <td><?=$data->getName()?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$data->getEmail()?></td>
        </tr>

        <tr>
            <td>Telefone</td>
            <td><?=$data->getPhone()?></td>
        </tr>

        <tr>
            <td>Tipo do evento</td>
            <td><?=$data->getEvent()?></td>
        </tr>
        <tr>
            <td>Data</td>
            <td><?=$data->getDate()?></td>
        </tr>

        <tr>
            <td>Horas</td>
            <td><?=$data->getHours()?></td>
        </tr>

        <tr>
            <td>Local</td>
            <td><?=$data->getLocale()?></td>
        </tr>

        <tr>
            <td>Mensagem</td>
            <td><?=$data->getMessage()?></td>
        </tr>
        </tbody>
    </table>
</div>
