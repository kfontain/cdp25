<?php

$servername = 'mysql';
$username = 'root';
$password = '';
$dbname = 'scrum';

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die('connection failed');
}
else {
    echo 'connected succesfully';
}
?>
