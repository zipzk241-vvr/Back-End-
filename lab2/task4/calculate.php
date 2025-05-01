<?php
require '../Function/func.php';

$x = $_POST['x'];
$y = $_POST['y'];

$xy = my_xy($x, $y);
$x_fact = my_fact($x);
$sin = my_sin($x);
$cos = my_cos($x);
$tg = $cos != 0 ? $sin / $cos : '∞';
$my_tg = my_tg($x);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <style>
        table { border-collapse: collapse; }
        td, th { border: 1px solid black; padding: 6px 10px; text-align: center; }
        th { background-color: yellow; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>x<sup>y</sup></th>
            <th>x!</th>
            <th>my_tg(x)</th>
            <th>sin(x)</th>
            <th>cos(x)</th>
            <th>tg(x)</th>
        </tr>
        <tr>
            <td><?= $xy ?></td>
            <td><?= $x_fact ?></td>
            <td><?= $my_tg ?></td>
            <td><?= $sin ?></td>
            <td><?= $cos ?></td>
            <td><?= $tg ?></td>
        </tr>
    </table>
</body>
</html>
