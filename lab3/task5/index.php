<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $baseDir = 'users/';

    if ($login && $password) {
        $userDir = $baseDir . $login;

        if (!is_dir($userDir)) {
            mkdir($userDir, 0777, true);
            // Підпапки
            mkdir("$userDir/video");
            mkdir("$userDir/music");
            mkdir("$userDir/photo");

            // Додати по 1 файлу
            file_put_contents("$userDir/video/info.txt", "Це відео-файл користувача $login");
            file_put_contents("$userDir/music/song.txt", "Це музика користувача $login");
            file_put_contents("$userDir/photo/photo.txt", "Це опис фото користувача $login");

            $message = "Папка користувача $login створена успішно!";
        } else {
            $message = "Помилка: Папка користувача '$login' вже існує!";
        }
    } else {
        $message = "Введіть логін і пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
</head>
<body>
    <h2>Реєстрація користувача</h2>
    <form method="post">
        Логін: <input type="text" name="login" required><br>
        Пароль: <input type="password" name="password" required><br>
        <input type="submit" value="Створити папку">
    </form>

    <p><?= $message ?></p>
    <p><a href="delete.php">Перейти до видалення</a></p>
</body>
</html>
