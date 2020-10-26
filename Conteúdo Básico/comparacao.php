<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Test</title>
    </head>
    <body>
      <?php 

     // operadores de Comparação
      
     $a = 1; //Number
     $b = "10"; // String

     if($a == $b){
       echo "A é Igual a B <br />";
     }
     if($a === $b){
       echo "A é idêntico a B  <br />";
     }
     if($a != $b){
       echo "A Não é Igual a B  <br />";
     }
     if($a <> $b){
       echo "A Diferente a B  <br />";
     }
     if($a !== $b){
       echo "A não idêntico a B  <br />";
     }

    ?>  
    </body>
</html>