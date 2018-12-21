<?php
$age = 44;
$string = ' ans c\'est mon age';
$string2 = ' c\'est mon chiffre porte bonheur';
function concatNumberString($number, $text){
  return $number . $text ;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>php part4 ex5</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <p> <?= concatNumberString($age, $string); ?></p>
    <p> <?= concatNumberString($age, $string2); ?></p>
  </body>
</html>
