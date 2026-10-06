<?php
$moneda_USD = "USD";
$moneda_EUR = "EUR";
$apikey = "41e28845344f2413bf3eed50";
$url = "https://v6.exchangerate-api.com/v6/41e28845344f2413bf3eed50/latest/EUR";
$response = file_get_contents($url);
$data = json_decode($response, true);
$canvi = $data["conversion_rates"][$moneda_USD];
if (isset($_GET["moneda"]) &&
    is_numeric($_GET["moneda"]) &&
    $_GET["moneda"] > 0 &&
    $_GET["moneda"] === "EUR"
) {
    $moneda = $_GET["moneda"];
    $resultat = $moneda * $canvi;
    echo "Cantidad: " . $resultat . "$. Gracias";
} else {
    $url = "https://v6.exchangerate-api.com/v6/41e28845344f2413bf3eed50/latest/USD"
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $canvi = $data["conversion_rates"][$moneda_EUR];
    $moneda = $_GET["moneda"];
    $resultat = $moneda * $canvi;
    echo "Cantidad: " . $resultat . "$. Gracias";
}
?>