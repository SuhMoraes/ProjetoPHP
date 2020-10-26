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

      // Imprime um Array
     // print_r($nome);


      //Declarar uma variável
      $a = 10;
      $b = 6;

             
      //Operadores de Atribuição
      $a += $b; // a recebendo a soma de b
      echo $a.'<br />';
      $a -= $b; //a recebendo a subtração de b
      echo $a.'<br />';
      $a *= $b; //a recebendo a a multiplicação de b
      echo $a.'<br />';
      $a /= $b; //a recebendo a a divisão de b
      echo $a.'<br />';
      $a %= $b; //a recebendo o módulo de b
      echo $a.'<br />';
      $a **= $b; // a recebendo a exponenciação de b
      echo $a.'<br />';
      $a .= $b; // a concatenando com b



    ?>  
    </body>
</html>