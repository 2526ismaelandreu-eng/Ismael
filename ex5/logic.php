<?php
$moneda = $_GET['moneda'];
$preu = (float) $_GET['preu'];

if ($moneda === 'general') {
    $calculo = $preu*1.21;
    echo $calculo;
} elseif ($moneda === 'reduido') {
    $calculo = $preu*1.10;
    echo $calculo;
} elseif ($moneda === 'superreducido') {
    $calculo = $preu*1.04;
    echo $calculo;
} elseif ($moneda === 'sin') {
    $calculo = $preu*1.00;
    echo $calculo;
}
?>