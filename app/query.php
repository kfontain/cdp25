<?php

/*
 * connect()
 * ISSUES
 * getIssues()
 * deleteIssue(id)
 * createIssue(description, cost, prio)
 * modifyIssue(id, description, cost, prio)
 *
 * PROJECTS
 * createProject(name, sprintLenght)
 */

function connect()
{
    try {
        $bdd = new PDO('mysql:host=mysql;port=3306;dbname=scrum', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function getIssues()
{
    //return $bdd->query('SELECT * FROM `Issues`');
}

function deleteIssue($id=-1)
{
}

function createIssue($description='', $cost=0, $prio='')
{
    //INSERT INTO `issues` (`id`, `description`, `cost`, `priority`) VALUES (NULL, $description, $cost, $prio);
}

function ModifyIssue($id=-1, $description='', $cost=0, $prio='')
{
}

function createProject($name=null, $sprintLenght=null, $description="")
{
    //INSERT INTO `Projects` (`id`, `name`, `sprintLenght`, `description`) VALUES (NULL, $name, $sprintLenght, $description);
}
