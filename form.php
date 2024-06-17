<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
  </head>
  <body>
    <p><?php echo $paragrafo . strlen($paragrafo)?></p>
    <p><?php echo $parola?></p>
  </body>
</html>