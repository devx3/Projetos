<meta charset="UTF-8" />
<a href="javascript: window.history.back();"> [ VOLTAR ]</a>
<br />
<a href="javascript: window.location = window.location;"> [ REENVIAR ]</a>
<br />
<br />
<?php
 
require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'srv44.prodns.com.br';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contato@newlight.net.br';                 // SMTP username
$mail->Password = 'newli0902';                         // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'contato@newlight.net.br';
$mail->FromName = 'New Light';
$mail->addAddress('erick@newdesigners.com.br', 'Erick Bruno');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject 	= 'Teste e envio de email';
$mail->Body = <<<BODY
<h2>Esse é apenas um email de teste de SMTP</h2>
<p>Se você recebeu esse email, <b>parabéns!</b> Seu SMTP foi configurado com sucesso!</p>
BODY;

$mail->CharSet = 'utf-8';

if(!$mail->send()) {
    echo '<h1>Sua mensagem não foi enviada. :\'(</h1>';
    echo '<h3>Error 1563: ' . $mail->ErrorInfo.'</h3>';
} else {
    echo '<h1>Parabéns! Seu SMTP foi configurado com sucesso! :D</h1>';
}
