<?php
$raw_input = file_get_contents('php://input');

if (!empty($raw_input)) {
    $data = json_decode($raw_input, true);
    
    if ($data !== null) {
        echo "Username: " . ($data['username'] ?? 'Not provided') . "<br>";
        echo "Password: " . ($data['password'] ?? 'Not provided') . "<br>";
    } else {
        echo "Error: Invalid JSON received.<br>";
    }
} else {
    echo "No data received. Open test_lab4.php to send data.<br>";
}
?>
