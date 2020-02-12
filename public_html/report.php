<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aliens Abducted Me-Report an abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me-Report an abduction</h2>
    <?php
      $firt_name = $_POST['firtname'];
      $last_name = $_POST['lastname'];
      $when_it_happened = $_POST['whenithappened'];
      $how_long = $_POST['howlong'];
      $how_many = $_POST['howmany'];
      $what_they_did = $_POST['whattheydid'];
      $alien_description = $_POST['aliendescription'];
      $fang_spotted = $_POST['fangspotted'];
      $email = $_POST['email'];

      echo 'Thanks for submitting the form.<br/>';
      echo 'My firt name is: '.$firt_name. '<br/>';
      echo 'My second name is: '.$last_name. '<br/>';
      echo 'You are abducted '.$when_it_happened.'<br/>';
      echo 'Were:'.$how_many.'<br/>';
      echo 'ande ware gone for'.$how_long.'<br/>';
      echo 'describe them:'.$alien_description.'<br/>';
      echo 'Was fang there?'.$fang_spotted.'<br/>';
      echo 'Your email eddress is'.$email;

     ?>
  </body>
</html>
