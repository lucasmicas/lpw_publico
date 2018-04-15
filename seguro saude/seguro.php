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

?>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Seguro Saude</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/styles.css">
   </head>
   <body>
      <div class="container">
         <h2 id="titulo">Cote seu seguro de saúde</h2>
         <br>
         <p>Prezado(a) <?= $nome ?>, segue a sua cotação abaixo:</p>
         <table class="table">            
            <tbody>               
               <tr>
                  <td>Valor seguro</td>
                  <td id="cotacao">R$<?= $valorSeguro ?></td> 
               </tr>               
            </tbody>
         </table>         
      </div>
   </body>
</html>