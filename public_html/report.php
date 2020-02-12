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

     ?>
  </body>
</html>
