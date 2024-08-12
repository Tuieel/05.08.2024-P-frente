<?php
$notas = [5,7,8,4,10];

for($i=0; $i<=count($notas); $i++){
  echo $notas[$i]."<br>";
    
}
$nomes = ["Miguel" =>37, "João" =>16, "Maria" =>17];

foreach ($nomes as $key => $valor){
  echo "Nome: " .$key . "Idade: " .$valor. "<br>";
}
?>