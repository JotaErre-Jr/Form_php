<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aliens Abducted Me-Report an abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me-Report an abduction</h2>
    <?php
      $name = $_POST['firtname'].' '.$_POST['lastname'];
      $when_it_happened = $_POST['whenithappened'];
      $how_long = $_POST['howlong'];
      $how_many = $_POST['howmany'];
      $what_they_did = $_POST['whattheydid'];
      $alien_description = $_POST['aliendescription'];
      $fang_spotted = $_POST['fangspotted'];
      $email = $_POST['email'];
      $other = $_POST['other'];

      $msg = $name.' was abducted '.$when_it_happened.' and was gone for '.$how_long.'\n'.
      'number of Aliens '.$how_many.'\n'.
      'Alien description '.$alien_description.'\n'.
      'What they did '.$what_they_did.'\n'.
      'Fang spotted '.$fang_spotted.'\n'.
      'Other comments'.$other.'\n';


      $to = 'rochajotaerre@gmail.com';
      $subject = 'Aliens abducted Me - abduction report';
      $msg = "$name was abducted: $when_it_happened and was gone for: $how_long\n".
      "number of Aliens: $how_many\n".
      "Alien description: $alien_description\n".
      "What they did: $what_they_did\n".
      "Fang spotted: $fang_spotted\n".
      "Other comments: $other\n";
      mail($to, $subject, $msg, 'From'.$email);

      echo 'Thanks for submitting the form.<br/>';
      echo 'MY Name is: '.$name. '<br/>';
      echo 'You are abducted '.$when_it_happened.'<br/>';
      echo 'Were:'.$how_many.'<br/>';
      echo 'ande ware gone for'.$how_long.'<br/>';
      echo 'describe them:'.$alien_description.'<br/>';
      echo 'Was fang there?'.$fang_spotted.'<br/>';
      echo 'Your email eddress is'.$email;
      echo 'Other comments: '.$other;
      /*
      ############biblioteca PHPMailer################
      */
      // Caminho da biblioteca PHPMailer
require 'PHPMailer-master/PHPMailerAutoload.php';

// Instância do objeto PHPMailer
$mail = new PHPMailer;

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

// Usar autenticação SMTP
$mail->SMTPAuth = true;

// Usuário da conta
$mail->Username = 'rochajotaerre@gmail.com';

// Senha da conta
$mail->Password = 'jmrj198623';

// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';

// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);

// Email do Remetente
$mail->From = 'rochajotaerre@gmail.com';

// Nome do Remetente
$mail->FromName = 'Jotaerre';

// Endereço do e-mail do destinatário
$mail->addAddress('jotaerre07@yahoo.com.br');

// Assunto do e-mail
$mail->Subject = 'E-mail PHPMailer';

// Mensagem que vai no corpo do e-mail
$mail->Body = '<h1>Mensagem enviada via PHPMailer</h1>';

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;


     ?>
  </body>
</html>
