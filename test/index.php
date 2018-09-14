<?php
require __dir__. "/../vendor/autoload.php";
use Notification\Email;


$newemail = new Email(2, 'smtp.gmail.com', true, 'posinfobr@gmail.com', 'webmaster2008', 'tls', 587, 'paulooliveiradesouza@hotmail.com', 'Paulo Oliveira' );
$emailSent = $newemail->sendMail("Funcional", "<p>Ione Paulo é  <strong>Gostoso....</strong></p>", "ionepos@hotmail.com", "Ione Oliveira", "paulooliveiradesouza@hotmail.com", "Paulo");
if($emailSent):
    echo 'Pos E-mail Enviado com sucesso, e uma alteração feita.';  
else:
    echo 'Pos Erro ao Enviar';
endif;


    