<?php
// usuario digita 10 numeros
// Programa fala quantos deles é maior do que 10

$saoMaiores = 0;
for($i=0; $i<10; $i++){
    $numero = readline(" Digite um numero: ");
    $numero = readline("Digite um numero: ");

    if($numero > 10){
        $saoMaiores++;
    }
}

print(" Existem $saoMaiores nuumeros maiores que 10\n");
?>