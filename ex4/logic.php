<?php
$estil = $_GET['estil'] ?? null; # "?? null" se pone para que si estil no existe, porque el usuario no pone ningun campo
# o que no se envia, entonces estil no exsite, por ende eligue el de la derecha "null"  .

if ($estil === 'Pop') {
    echo "Has triat Pop";
} elseif ($estil === 'Rock') {
    echo "Has triat Rock";
} elseif ($estil === 'Jazz') {
    echo "Has triat Jazz";
} else {
    echo "Un altre estil";
}
?>