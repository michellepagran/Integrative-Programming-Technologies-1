<?php
header('Content-Type: application/json');

$profile = [
    "id" => 23147313,
    "name" => "Michelle",
    "email" => "michellepagran143@gmail.com",
    "status" => "active"
];

echo json_encode($profile);
?>
