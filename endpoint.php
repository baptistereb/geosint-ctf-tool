<?php
include "config.php";

// Fonction Haversine
function haversine($lat1, $lon1, $lat2, $lon2) {
    $R = 6371000;  // Rayon de la Terre en mètres
    $phi1 = deg2rad($lat1);
    $phi2 = deg2rad($lat2);
    $delta_phi = deg2rad($lat2 - $lat1);
    $delta_lambda = deg2rad($lon2 - $lon1);

    $a = sin($delta_phi / 2) ** 2 + cos($phi1) * cos($phi2) * sin($delta_lambda / 2) ** 2;
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    return $R * $c;
}

// Récupérer l'ID du challenge, la latitude et la longitude depuis les paramètres GET
$challId = isset($_GET['challId']) ? (int)$_GET['challId'] : null;
$lat = isset($_GET['lat']) ? (float)$_GET['lat'] : null;
$lon = isset($_GET['lon']) ? (float)$_GET['lon'] : null;

if ($challId === null || $challId < 1 || $challId > count($correctValues)) {
    header("Content-Type: application/json");
    echo json_encode(["error" => "Wrong request"]);
    exit();
}

if ($lat === null || $lon === null) {
    header("Content-Type: application/json");
    echo json_encode(["error" => "Missing parameters"]);
    exit();
}

$lat_expected = $correctValues[$challId - 1][0];
$lon_expected = $correctValues[$challId - 1][1];

if (haversine($lat, $lon, $lat_expected, $lon_expected) < $accepted_error) {
    echo $flags[$challId - 1];
} else {
    echo $taunt[array_rand($taunt)];
}
?>