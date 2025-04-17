<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$apiKey = '57d8a8de888c8377ed1311ea5b90f358'; // Your API key here

if (!isset($_GET['endpoint']) || !isset($_GET['city'])) {
    echo json_encode(['error' => 'Missing required parameters']);
    exit;
}

$endpoint = $_GET['endpoint'];
$city = urlencode($_GET['city']);
$units = isset($_GET['units']) ? $_GET['units'] : 'metric';

$url = "https://api.openweathermap.org/data/2.5/{$endpoint}?q={$city}&appid={$apiKey}&units={$units}";

$response = file_get_contents($url);
echo $response;
?> 