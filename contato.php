<?php
if (isset($_POST['submit'])) {
    $to = "contato@ilog.com.br, gustavo@ilog.com.br";
    $subject = "Contato Edutivo - ".$_POST['name'];
    $message = "Nome: ".$_POST['name']."\nEmpresa: ".$_POST['empresa']."\nE-mail: ".$_POST['email']."\nTelefone: ".$_POST['telefone'];
    $message .= "\nMensagem:\n".$_POST['mensagem'];
$email = $_POST['email'];
    $from = "contato-edutivo@server3.ilog.com.br";
//    $headers = "From:" . $from;
 $headers = "From: $from\r\nReply-to: $email";
header( "refresh:2;url=http://www.edutivo.com.br" );

    if (mail($to, $subject, $message, $headers)) {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else {
        echo "Erro ao enviar mensagem";
    }
 } else { echo "Mensagem nao enviada."; }

?>
