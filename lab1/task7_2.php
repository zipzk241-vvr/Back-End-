<?php
function drawRedSquares($n)
{
    echo "<div style='background-color: black; position: relative; width: 100vw; height: 100vh; overflow: hidden;'>";

    for ($i = 0; $i < $n; $i++) {
        $size = mt_rand(30, 100); // розмір квадратів
        $top = mt_rand(0, 90); // % зверху
        $left = mt_rand(0, 90); // % зліва
        echo "<div style='
            width: {$size}px;
            height: {$size}px;
            background-color: red;
            position: absolute;
            top: {$top}%;
            left: {$left}%;
        '></div>";
    }

    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body style="margin: 0;">
    <h2 style="color: white; position: absolute; z-index: 10;">2 завдання</h2>
    <?php drawRedSquares(10); ?>
</body>

</html>