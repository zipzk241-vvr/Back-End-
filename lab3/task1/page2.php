<?php
$fontSize = $_COOKIE['font_size'] ?? '16px';
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Друга сторінка</title>
</head>

<body style="font-size: <?= htmlspecialchars($fontSize) ?>;">
    <p>Це інша сторінка сайту з тим самим розміром шрифту з cookie.</p>
    <p><a href="index.php">Повернутися</a></p>
</body>

</html>