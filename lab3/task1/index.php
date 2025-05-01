<?php
if (isset($_GET['size'])) {
    setcookie('font_size', $_GET['size'], time() + (30 * 24 * 60 * 60)); 
    $_COOKIE['font_size'] = $_GET['size']; 
}

$fontSize = $_COOKIE['font_size'] ?? '16px';
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Вибір шрифту</title>
</head>

<body style="font-size: <?= htmlspecialchars($fontSize) ?>;">
    <p>
        <a href="?size=24px">Великий шрифт</a> |
        <a href="?size=16px">Середній шрифт</a> |
        <a href="?size=12px">Маленький шрифт</a>
    </p>

    <p>
        Це приклад тексту, який змінює розмір залежно від встановленого cookie.
    </p>

    <p><a href="page2.php">Перейти на іншу сторінку</a></p>
</body>

</html>