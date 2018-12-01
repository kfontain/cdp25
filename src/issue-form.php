<?php
/*
 * Add New Issue: issue-form.php
 * Modify Issue #3: issue-form.php?id=3
 */

/**
 * Gets an issue by ID.
 *
 * @param int $id ID of issue.
 * @return array|bool Issue array, or FALSE on failure.
 */
function getIssue($id)
{
    $mysqli = new mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

    if ($mysqli->connect_error) {
        $error = 'Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        trigger_error($error, E_USER_ERROR);
        return false;
    }

    $sql = 'SELECT * FROM Issues WHERE id = ? LIMIT 1';

    $stmt = $mysqli->prepare($sql);
    if ($stmt === false) {
        $error = 'Prepare Error (' . $mysqli->errno . ') ' . $mysqli->error;
        trigger_error($error, E_USER_ERROR);
        return false;
    }

    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($stmt === false) {
        $error = 'Result Error (' . $mysqli->errno . ') ' . $mysqli->error;
        trigger_error($error, E_USER_ERROR);
        return false;
    }

    $issue = $result->fetch_assoc();
    $mysqli->close();
    return $issue;
}

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $action = 'modify';
    $id = $_GET['id'];
    $issue = getIssue(intval($id));
    $TITLE = "Modify Issue #$id";
} else {
    $action = 'add';
    $id = null;
    $issue = null;
    $TITLE = 'Add New Issue';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $TITLE; ?></title>
    </head>
    <body>
        <a href="backlog.php">&#8676; Backlog</a>
        <h1><?php echo $TITLE; ?></h1>
        <form action="query.php" method="post">
            <input id="action" name="action" type="hidden" value="<?php echo $action; ?>" />
            <input id="id" name="id" type="hidden" value="<?php echo $id; ?>" />
            <table>
                <tr class="required">
                    <td>Description:</td>
                    <td>
                        <textarea id="description" name="description"
                                  maxlength="500" rows="5" cols="50"
                                  required="required"><?php if (is_array($issue)) echo $issue['description']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Cout de Réalisation:</td>
                    <td>
                        <?php $cost = is_array($issue) ? $issue['cost'] : 0; ?>
                        <input id="cost" name="cost" type="number" min="0" step="0.5"
                               value="<?php echo $cost; ?>" /> workday(s)
                    </td>
                </tr>
                <tr>
                    <td>Priorité:</td>
                    <td>
                        <?php
                        $priority = is_array($issue) ? $issue['priority'] : 0;
                        $selected = 'selected="selected"';
                        ?>
                        <select id="priority" name="priority">
                            <option value="0" <?php if ($priority === 0) echo $selected; ?>>None</option>
                            <option value="1" <?php if ($priority === 1) echo $selected;  ?>>Low</option>
                            <option value="2" <?php if ($priority === 2) echo $selected;  ?>>Medium</option>
                            <option value="3" <?php if ($priority === 3) echo $selected;  ?>>High</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input id="submit" type="submit" value="Submit" />
                        <input id="reset" type="reset" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
