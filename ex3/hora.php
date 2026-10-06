<?php
$time = (int) date("G");
if ($time >= 5 && $time < 14){
    echo "Bon Dia";
} elseif ($time >= 14 && $time < 19) {
    echo "Bona Tarda";
} else {
    echo "Bona nit";
}
?>