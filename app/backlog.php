<?php

 ?>
<h2>Backlog</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Description</td>
        <td>Cout de Réalisation</td>
        <td>Priorité</td>
    </tr>
    <?php
        $sizeRaw = 4;
        $backlog = array(
            array('0','do0','cout0','prio0'),
            array('1','do1','cout1','prio1'),
        );

        foreach ($backlog as $issue) {
            $id = $issue[0];

            echo "<tr>";
            for ($j=0; $j < $sizeRaw; $j++) {
                echo "<td>".$issue[$j]."</td>";
            }
            echo '<td><a href="issue-form.php?id=' . $id . '">modify</a></td>';
            echo '<td><a href="#">delete</a></td>';
            echo "</tr>";
        }
    ?>
</table>
<a href="issue-form.php">Add issue</a>
