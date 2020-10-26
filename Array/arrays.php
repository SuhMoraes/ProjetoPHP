<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Test</title>
    </head>
    <body>
      <?php 

      //Construção de ARRAY

      $nomes = ["Pedro", "João", "Maria", "Matias", "Jacira"];
      print_r($nomes);
      echo "<p>Chave 00: ".$nomes[0];
      echo "<p>Chave 03: ".$nomes[3];

      $nomes = array("Pedro", "João", "Maria", "Matias", "Jacira");
      print_r($nomes);
      echo "<p>Chave 00: ".$nomes[0];
      echo "<p>Chave 03: ".$nomes[3];





    ?>  
    </body>
</html>