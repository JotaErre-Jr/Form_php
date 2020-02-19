<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $first_name = $_POST['firtname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $what_they_did = $_POST['whattheydid'];
    $alien_description = $_POST['aliendescription'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];

      $dbc=mysqli_connect('localhost', 'root', '', 'aliendatabase')
      or die('Error connect to MySQL server.');
      $query="INSERT INTO aliens_abduction(first_name, last_name, when_it_happened, how_long,
      how_many, alien_description,what_they_did, fang_spotted, Other, email)
      VALUES('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many',
      '$alien_description', '$what_they_did','$fang_spotted', '$other','$email')";
      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

      mysqli_close($dbc);

      echo 'Thanks for submitting the form.<br/>';
      echo 'MY Name is: '.$first_name. '<br/>';
      echo 'MY Last Name is: '.$last_name. '<br/>';
      echo 'You are abducted '.$when_it_happened.'<br/>';
      echo 'Were:'.$how_many.'<br/>';
      echo 'ande ware gone for'.$how_long.'<br/>';
      echo 'describe them:'.$alien_description.'<br/>';
      echo 'Was fang there?'.$fang_spotted.'<br/>';
      echo 'Your email eddress is'.$email.'<br/>';
      echo 'Other comments: '.$other;


     ?>
  </body>
</html>
