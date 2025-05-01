<?php
function drawColorTable($rows, $cols)
{
    echo "<table>";

    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='width: 50px; height: 50px; background-color: $color; border: 1px solid #000;'></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <h2>1 завдання</h2>
    <?php drawColorTable(6, 6); ?>
</body>

</html>