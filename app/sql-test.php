<?php
$mysqli = new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
