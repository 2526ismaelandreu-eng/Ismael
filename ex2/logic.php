<?php
$moneda_USD = "USD";
$moneda_EUR = "EUR";
$apikey = "41e28845344f2413bf3eed50";
if (isset($_GET["moneda"]) &&
    is_numeric($_GET["moneda"]) &&
    $_GET["moneda"] > 0 &&
    $_GET["moneda_option"] === "EUR"
) {
    $url = "https://v6.exchangerate-api.com/v6/41e28845344f2413bf3eed50/latest/EUR";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $canvi = $data["conversion_rates"][$moneda_USD];
    $moneda = $_GET["moneda"];
    $resultat = $moneda * $canvi;
    echo "Cantidad: " . $resultat . "€. Gracias";
} elseif (isset($_GET["moneda"]) &&
    is_numeric($_GET["moneda"]) &&
    $_GET["moneda"] > 0 &&
    $_GET["moneda_option"] === "USD"
) {
    $url = "https://v6.exchangerate-api.com/v6/41e28845344f2413bf3eed50/latest/USD";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $canvi = $data["conversion_rates"][$moneda_EUR];
    $moneda = $_GET["moneda"];
    $resultat = $moneda * $canvi;
    echo "Cantidad: " . $resultat . "$. Gracias";
}
?>