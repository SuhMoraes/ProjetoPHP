<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Test</title>
    </head>
    <body>
      <?php 

      // Variável Nome
      $nome = "Fábio";

      // Variável idade
      $idade = 30;

      echo "<p> Nome: ".$nome."<br />"."Idade: ".$idade."<br /></p>";

      // Operadores de incremento e decremento
      $count = 5;

      echo ++$count. '<br />'; //primeiro +1 depois Imprimiu
      echo $count++. '<br />'; // primeiro imprimiu depois ele somou
      echo --$count. '<br />'; // primeiro -1 depois imprimiu
      echo $count--. '<br />'; // Primeiro imprimiu depois -1
      echo $count. '<br />'; // Impressão 0

    ?>  
    </body>
</html>