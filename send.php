<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$data = file_get_contents("php://input");

$ch = curl_init("https://www.5centsms.com.au/api/v5/sms");

curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
CURLOPT_POSTFIELDS => $data
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response;
