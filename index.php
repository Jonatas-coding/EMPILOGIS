<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST[telefone]);

    $para = "comercial.motriz@hotmail.com";
    $assunto = "Coleta de dados - Motriz";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: jonatasoliveira2016@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversivon();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o email!");
    }
?>
