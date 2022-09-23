<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

if ($peso < 0)
echo "ERRO. Peso inválido!<br>";

else if ($altura < 0)
echo "ERRO. Altura inválida!<br>";

else {

$imc = $peso / ($altura * $altura);

echo "seu IMC = $imc";

}


?>