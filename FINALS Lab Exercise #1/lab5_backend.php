<?php
header('Content-Type: application/json');

$raw = file_get_contents('php://input');
$input = json_decode($raw, true);

$response = [
    "status" => "success",
    "message" => "Welcome, " . ($input['name'] ?? 'Guest') . "!"
];

echo json_encode($response);
?>