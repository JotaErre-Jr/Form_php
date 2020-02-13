<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aliens Abducted Me-Report an abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me-Report an abduction</h2>
    <?php
    include_once(‘..PHPMailer-master/phpmailer.php’); //Chama o arquivo phpmailer.php com as funções para realizar o envio.

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

      //#########################################
// Dados da conta de e-mail que fará o envio
//#########################################

$smtp = new Smtp("localhost"); //Endereço do SMTP, geralmente localhost.
$smtp->user = "rochajotaerre@gmail.com"; //Conta de email
$smtp->pass = "jmrj198623"; //Senha da Conta de e-mail.
$smtp->debug = false; //Somente para usuários avançados que desejam o log do envio para testes.
      /*
      ############biblioteca PHPMailer################
      */
      //#########################################
      // Envio do formulário
      //#########################################

      $to = "rochajotaerre@gmail.com"; //Informe aqui o e-mail que deve receber a mensagem do formulário.
      $from = $email;
      $subject = "Contato – " . $when_it_happened;
      $mensagem = $msg;

      if (isset($_POST[‘submit’])) {
if($name && $email && $when_it_happened && $msg) {
if($smtp->Send($to, $from, $subject, $msg)){
echo "<script>alert(‘Contato enviado!’);</script>";
echo "<script>window.location = ‘index.html’;</script>"; //Altere aqui para o endereço de sua página.
exit;
}
}

else {
echo "<script>alert(‘Preencha todos os campos!’);</script>";
echo "<script>window.location = ‘index.html’;</script>"; //Altere aqui para o endereço de seu formulário
exit;
}

}

     ?>
  </body>
</html>
