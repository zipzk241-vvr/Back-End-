<?php
$message = '';

function deleteFolder($folder)
{
    if (!is_dir($folder))
        return;
    $files = array_diff(scandir($folder), ['.', '..']);
    foreach ($files as $file) {
        $path = "$folder/$file";
        is_dir($path) ? deleteFolder($path) : unlink($path);
    }
    rmdir($folder);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $userDir = 'users/' . $login;

    if (is_dir($userDir)) {
        deleteFolder($userDir);
        $message = "Папка користувача '$login' успішно видалена.";
    } else {
        $message = "Такої папки не існує.";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <h2>Видалення користувача</h2>
    <form method="post">
        Логін: <input type="text" name="login" required><br>
        Пароль: <input type="password" name="password" required><br>
        <input type="submit" value="Видалити папку">
    </form>

    <p><?= $message ?></p>
    <p><a href="index.php">Назад до створення</a></p>
</body>

</html>