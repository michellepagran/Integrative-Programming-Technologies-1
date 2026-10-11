<?php
$json_string = '{"name":"Michelle","age":21,"email":"michellepagran143@gmail.com"}';

$user_object = json_decode($json_string);

$user_array = json_decode($json_string, true);

echo "Object: " . $user_object->name . "<br>";
echo "Array: " . $user_array['email'] . "<br>";
?>
