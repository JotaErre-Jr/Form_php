<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dbc=mysqli_connect('localhost', 'root', '', 'aliendatabase')
      or die('Error connect to MySQL server.');
      $query="INSERT INTO alien_abduction(first_name, last_name, when_it_happened, how_long,".
      "how_many, alien_description,what_they_did, fang_spotted, Other, email)".
      "VALUES('Sally', 'Jones', '3 dias atrás', '1 dia', 'quatro', ".
      "'Verde com seis tentaculos', 'Nós só conversamos e brincamos com um cachorro', ".
      "'sim', 'Acho que posso ter visto seu cão. Ene em contato.',".
      "'sally@gregs-list.net')";
      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

      mysqli_close($dbc);


     ?>
  </body>
</html>
