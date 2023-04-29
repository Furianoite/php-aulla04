<?php
$altura = 1.85;
$peso = 75;
$imc = $peso/($altura*$altura);
if ($imc < 18.5){
    echo "Abaixo do peso";}
else if ($imc >= 18.5 && $imc < 25){
    echo"Peso ideal"; }
else if ($imc >= 25 && $imc <= 30){
    echo "Acima do peso";}
else{
    echo "Obesidade";
}


?>





