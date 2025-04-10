<?php
echo "<table border='1' cellspacing='0' cellpadding='20'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
            echo "<td bgcolor='white'></td>";
        } else {
            echo "<td bgcolor='black'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
echo "<br/>This program is written by Utkarsh";

?>