<?php

/**
 * Creates a MySQLi connection to the database as defined bt the MYSQL_* environment variables.
 *
 * @return \mysqli The MySQLi connection to the database.
 */
function mysqliConnect()
{
    return new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
}

/**
 * Gets an issue by ID.
 *
 * @param int $id Issue ID.
 * @return array|bool Issue array, or FALSE on failure.
 * @throws \mysqli_sql_exception
 */
function getIssue($id)
{
    if ($id < 1) {
        return false;
    }

    $mysqli = mysqliConnect();

    $sql = 'SELECT * FROM Issues WHERE id = ? LIMIT 1';

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $issue = $stmt->get_result()->fetch_assoc();

    $mysqli->close();

    return $issue;
}

function getIssues()
{
}

function deleteIssue()
{
}

function createIssue()
{
}

function modifyIssue()
{
}

function createProject()
{
}

// Enables exception throwing for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

