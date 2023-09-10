<?php

$nomeremetente     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$emailremetente    = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS));
$emaildestinatario = 'profissionalmurillogomes@gmail.com'; // Seu e-mail de destino
$mensagem          = filter_input(INPUT_POST, "MENSAGEM", FILTER_SANITIZE_SPECIAL_CHARS);
$assunto           = 'Assunto do E-mail'; // Defina o assunto aqui

$mensagemHTML = '<strong>Formulário de Contato</strong>
<p><b>Nome:</b> ' . $nomeremetente . '</p>
<p><b>E-Mail:</b> ' . $emailremetente . '</p>
<p><b>Assunto:</b> ' . $assunto . '</p>
<p><b>Mensagem:</b> ' . $mensagem . '</p>
<hr>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";
$headers .= "Return-Path: $emailremetente\r\n";

$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

if ($envio) {
    $mgm = "E-MAIL ENVIADO COM SUCESSO! O link será enviado para o e-mail fornecido no formulário.";
    echo "<meta http-equiv='refresh' content='10;URL=contato.php'>";
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo $mgm;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php $mgm ?></h1>
    <a href="./index.html">Voltar</a>
</body>

</html>