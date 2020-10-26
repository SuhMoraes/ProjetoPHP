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

      
  
        //Operadores Aritméticos
        $add = $a +$b;
        $sub = $a - $b;
        $mult = $a * $b;
        $div =$a / $b;
        $mod = $a % $b;
        $exp = $a ** $b;
  
  
        echo $add.'<br />';
        echo $sub.'<br />';
        echo $mult.'<br />';
        echo $div.'<br />';
        echo $mod.'<br />';



    ?>  
    </body>
</html>