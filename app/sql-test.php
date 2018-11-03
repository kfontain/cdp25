<?php
$mysqli = new mysqli('mariadb', 'cdp25', 'r8T44vN9qQ', 'scrum');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
