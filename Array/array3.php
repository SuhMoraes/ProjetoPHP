<?php
 $nomes = array(
     0=>array("Pedro",20),
     1=>array("João",25),
     2=>array("Maria",25),
     3=>array("Marcos",21)

 );
//$nome representa cada linha de $nomes, e cada linha é uma array com "nomes" e "idade".
 foreach ($nomes as $nome){
     echo $nome[0].'-'.$nome[1]."<br />";
 }
?>

