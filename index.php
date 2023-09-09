<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$emailremetente    = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS));
$emaildestinatario = 'profissionalmurillogomes@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$mensagem             = filter_input(INPUT_POST, "MENSAGEM", FILTER_SANITIZE_SPECIAL_CHARS);


/* Mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<strong>Formulário de Contato</strong>
<p><b>Nome:</b> ' . $nomeremetente . '
<p><b>E-Mail:</b> ' . $emailremetente . '
<p><b>Assunto:</b> ' . $assunto . '
<p><b>Mensagem:</b> ' . $mensagem . '</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

if ($enviaremail) {
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
}
