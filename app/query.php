<?php

/*
 * connect()
 * getIssues()
 * deleteIssue(id)
 * createIssue(id, description, cost, prio)
 * modifyIssue(id, description, cost, prio)
 */
$servername = 'localhost:8082';
$username = 'root';
$password = '';
$dbname = 'scrum';

public function connect()
{
    $con = new mysqli($servername, $username, $password);
    if ($con->connect_error) {
        die('error');
    }
    echo('success');
}

public function getIssues()
{

}

public function deleteIssue($id=-1)
{
}

public function createIssue($id=-1, $description='', $cost=0, $prio='')
{
}

public function ModifyIssue($id=-1, $description='', $cost=0, $prio='')
{
}
?>
