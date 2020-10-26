<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Test</title>
    </head>
    <body>
      <?php 

     // operadores Lógicos
      $a = true;
      $b = true;

      if ($a and $b){
        echo "Verdadeiro se A e B verdadeiros! <br />";
      }
      if ($a && $b){
        echo "Verdadeiro se A e B verdadeiros! <br />";
      }
      if ($a or $b){
        echo "Verdadeiro se A e/ou B Verdadeiros!  <br />";
      }
      if ($a || $b){
        echo "Verdadeiro se A e/ou B Verdadeiros!  <br />";
      }
      // Operador Xor => Significa "ou exclusivo", ou seja apenas um dos valores pode ser true. Não pode ter duas verdades.
      if ($a xor $b){ 
        echo "Verdadeiro se A <b>ou</b> B Verdadeiros!  <br />" ;       
      }
      if (!$a){
       echo "Verdadeiro se A for Falso!  <br />"  ;
      }
    ?>  
    </body>
</html>