<?php

if(isset($_POST['nomeCompleto']) && isset($_POST['idade'])){      
   $nome = filter_input(INPUT_POST, "nomeCompleto", FILTER_SANITIZE_STRING);
   $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
   $valorSeguro = 200.00;

   for($i = 1; $i <= $idade; $i++){
      $valorSeguro += $valorSeguro * 0.5;   
   }

   if(isset($_POST['portador'])){      
      $valorSeguro += $valorSeguro * 0.3;
   }

}
echo("<html>");
include("modulos/heading.html");
echo("<body>");
include("modulos/container_cotacao.php");
echo("</body></html>");

?>