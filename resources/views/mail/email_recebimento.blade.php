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
            <td><?=$data->nome?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$data->email?></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><?=$data->phone ?></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><?=$data->body?></td>
        </tr>
        </tbody>
    </table>
</div>
