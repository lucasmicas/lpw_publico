<?php
$contador = filter_input(INPUT_COOKIE, "entradas");
if(isset($contador))
	$contador += 1;
else
	$contador = 1;
setcookie("entradas", $contador);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>Entradas: <?= $contador; ?></p>
  </body>
</html>
