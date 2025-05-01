<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($login === 'Admin' && $password === 'password') {
        $_SESSION['authorized'] = true;
        $_SESSION['user'] = $login;
    } else {
        $error = "Невірний логін або пароль!";
    }
}

$authorized = $_SESSION['authorized'] ?? false;
$user = $_SESSION['user'] ?? '';
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <?php if ($authorized): ?>
        <p><strong>Добрий день, <?= htmlspecialchars($user) ?>!</strong></p>
        <p><a href="?logout=1">Вийти</a></p>
    <?php else: ?>
        <?php if (!empty($error)): ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>
        <form method="post">
            <label>Логін: <input type="text" name="login"></label><br>
            <label>Пароль: <input type="password" name="password"></label><br>
            <input type="submit" value="Увійти">
        </form>
    <?php endif; ?>
</body>

</html>