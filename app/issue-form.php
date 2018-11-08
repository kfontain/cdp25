<?php
namespace app;

function getIssue($id) {
    $mysqli = new \mysqli($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
    if ($mysqli->connect_error) {
        $error = 'Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        trigger_error($error, E_USER_ERROR);
        return FALSE;
    }

    $sql = 'SELECT * FROM issues WHERE id = ? LIMIT 1';

    $stmt = $mysqli->prepare($sql);
    # Assert $stmt !== FALSE
    $stmt->bind_param('i', $id);

    if (!$stmt->execute()) {
        # Error
        return FALSE;
    }

    $result = $stmt->get_result();
    # Assert $result !== FALSE
    return $result->fetch_assoc();
}

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $action = 'modify';
    $id = $_GET['id'];
    $issue = getIssue($id);
    $TITLE = "Modify Issue #$id";
} else {
    $action = 'add';
    $id = NULL;
    $issue = NULL;
    $TITLE = 'Add New Issue';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $TITLE; ?></title>
    </head>
    <body>
        <a href="backlog.php">&#8676; Back to Backlog</a>
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
                                  required="required">
                            <?php if (is_array($issue)) echo $issue['description']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Realization Cost:</td>
                    <td>
                        <?php $cost = is_array($issue) ? $issue['cost'] : 0; ?>
                        <input id="cost" name="cost" type="number" min="0" step="0.5"
                               value="<?php echo $cost; ?>" /> workday(s)
                    </td>
                </tr>
                <tr>
                    <td>Priority:</td>
                    <td>
                    </td>
                        <?php
                        $priority = is_array($issue) ? $issue['priority'] : '';
                        $selected = 'selected="selected"';
                        ?>
                        <select id="priority" name="priority">
                            <option value="" <?php if ($priority === '') echo $selected; ?>>None</option>
                            <option value="low" <?php if ($priority === 'low') echo $selected; ?>>Low</option>
                            <option value="medium" <?php if ($priority === 'medium') echo $selected; ?>>Medium</option>
                            <option value="high" <?php if ($priority === 'high') echo $selected; ?>>High</option>
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
