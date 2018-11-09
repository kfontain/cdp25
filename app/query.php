<?php

/* 
 * deleteIssue(id)
 * createIssue(id, description, cost, prio)
 * modifyIssue(id, description, cost, prio)
 * getIssues()
 * connect()
 */
$servername = 'localhost:8082';
$username = 'root';
$password = '';
$dbname = 'scrum';

$con = new mysqli($servername, $username, $password);

if ($con->connect_error) {
    die('error');
}

echo('success');

?>
