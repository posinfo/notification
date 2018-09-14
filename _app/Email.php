<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/**
 * Description of Email
 *
 * @author POSINFO
 */
class Email {
    
    private $mail = \stdClass::class;
    
    public function __construct() {
        $this->mail = new PHPMailer(true); 
        
        $this->mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'posinfobr@gmail.com';                 // SMTP username
        $this->mail->Password = 'webmaster2008';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';                                    // TCP port to connect to
        $this->mail->setLanguage('br');                                    // TCP port to connect to
        $this->mail->isHTML(true);                                    // TCP port to connect to
        $this->mail->setFrom('paulooliveiradesouza@hotmail.com', 'Paulo Oliveira');
    }


    public function sendMail( $subject, $body, $replayEmail, $replayName, $addressEmail, $addressName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);
        
        try {
            $this->mail->send();
            return True;
        } catch (Exception $e) {
            echo "Erro ao Enviar o E-mail: {$this->mail->ErrorInfo}{$e->getMessage()}";
        }
    }
}
