
<h2>Backlog</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Description</td>
        <td>Cout de Réalisation</td>
        <td>Priorité</td>
        <td></td>
    </tr>
    <?php
        $sizeRaw = 4;
        $backlog[] = array('0','do0','cout0','prio0');
        $backlog[] = array('1','do1','cout1','prio1');

        for ($i=0; $i < sizeof($backlog); $i++) {
            echo "<tr>";
            for ($j=0; $j < $sizeRaw; $j++) {
                echo "<td>".$backlog[$i][$j]."</td>";
            }
            echo "<td><a href=\"#\">delete</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<a href="#">Add issue</a>
