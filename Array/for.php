<?php

$nomes = ["Pedro", "Antônia", "Beto", "Julia"];

//count => Função count() -> A função count() pode ser usada para retornar a quantidade de exemplos.
for ($contador = 0; $contador < count($nomes); $contador++) {

echo $nomes[$contador]."<br />";

}
$contador = 0;
while($contador < 10 ){
    echo $contador++."<br />";
}

?>