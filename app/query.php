<?php

/*
 * connect()
 * getIssues()
 * deleteIssue(id)
 * createIssue(id, description, cost, prio)
 * modifyIssue(id, description, cost, prio)
 */
$servername = '172.19.0.2';
$username = 'cdp25';
$password = 'r8T44vN9qQ';
$dbname = 'scrum';

echo "before";
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    echo "connection failed";
}
echo "connection successful";

function getIssues();
{
    //SELECT * FROM `issues`
}

function deleteIssue($id=-1)
{

}

function createIssue($id=-1, $description='', $cost=0, $prio='')
{
    //INSERT INTO `issues` (`id`, `description`, `cost`, `priority`) VALUES (NULL, $description, $cost, $prio);
}

function ModifyIssue($id=-1, $description='', $cost=0, $prio='')
{

}

?>

