<?php
session_start();

$login = $_POST['login'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$gender = $_POST['gender'] ?? '';
$city = $_POST['city'];
$games = $_POST['games'] ?? [];
$about = $_POST['about'];

// Зберігаємо у сесію (крім пароля і фото)
$_SESSION['login'] = $login;
$_SESSION['gender'] = $gender;
$_SESSION['city'] = $city;
$_SESSION['games'] = $games;
$_SESSION['about'] = $about;

// Перевірка пароля
$passStatus = ($pass1 === $pass2) ? 'ОК' : "не співпадає (перший – " . strlen($pass1) . " символів, другий – " . strlen($pass2) . " символів)";

// Обробка фото
$photoName = '';
if ($_FILES['photo']['error'] == 0) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photoName = 'uploads/' . uniqid() . '.' . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], $photoName);
}

?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Результат реєстрації</title>
</head>

<body>
    <p><strong>Логін:</strong> <?= htmlspecialchars($login) ?></p>
    <p><strong>Пароль:</strong> <?= $passStatus ?></p>
    <p><strong>Стать:</strong> <?= htmlspecialchars($gender) ?></p>
    <p><strong>Місто:</strong> <?= htmlspecialchars($city) ?></p>
    <p><strong>Улюблені ігри:</strong><br><?= implode('<br>', array_map('htmlspecialchars', $games)) ?></p>
    <p><strong>Про себе:</strong><br><?= nl2br(htmlspecialchars($about)) ?></p>
    <?php if ($photoName): ?>
        <p><strong>Фотографія:</strong><br><img src="<?= $photoName ?>" height="200"></p>
    <?php endif; ?>

    <p><a href="index.php">Повернутися на головну сторінку</a></p>
</body>

</html>