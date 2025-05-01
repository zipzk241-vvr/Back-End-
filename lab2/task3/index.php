<?php
session_start();

// Встановлення мови через GET-параметр
if (isset($_GET['lang'])) {
    setcookie('lang', $_GET['lang'], time() + (180 * 24 * 60 * 60)); // 180 днів
    $_COOKIE['lang'] = $_GET['lang']; // для відображення без перезавантаження
}

    // Значення з сесії 
    $login = $_SESSION['login'] ?? '';
    $gender = $_SESSION['gender'] ?? '';
    $city = $_SESSION['city'] ?? '';
    $games = $_SESSION['games'] ?? [];
    $about = $_SESSION['about'] ?? '';
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Форма</title>
</head>

<body>

    <!-- Вибір мови -->
    <p>
        <a href="index.php?lang=ukr"><img src="flags/ua.png" height="20"></a>
        <a href="index.php?lang=rus"><img src="flags/ru.png" height="20"></a>
        <a href="index.php?lang=pl"><img src="flags/pl.png" height="20"></a>
        <a href="index.php?lang=eng"><img src="flags/us.png" height="20"></a>
        <a href="index.php?lang=de"><img src="flags/de.png" height="20"></a>
        <a href="index.php?lang=fr"><img src="flags/fr.png" height="20"></a>
    </p>

    <p>Вибрана мова:
        <?php
        $langMap = ['ukr' => 'Українська', 'rus' => 'Російська', 'pl' => 'Польська', 'eng' => 'Англійська', 'de' => 'Німецька', 'fr' => 'Французька'];
        echo $langMap[$_COOKIE['lang']] ?? 'не вибрано';
        ?>
    </p>

    <!-- Форма -->
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label>Логін: <input type="text" name="login" value="<?= htmlspecialchars($login) ?>"></label><br>
        <label>Пароль: <input type="password" name="pass1"></label><br>
        <label>Пароль (ще раз): <input type="password" name="pass2"></label><br>

        Стать:
        <label><input type="radio" name="gender" value="чоловік" <?= $gender == 'чоловік' ? 'checked' : '' ?>>
            чоловік</label>
        <label><input type="radio" name="gender" value="жінка" <?= $gender == 'жінка' ? 'checked' : '' ?>>
            жінка</label><br>

        Місто:
        <select name="city">
            <?php
            $cities = ['Київ', 'Харків', 'Львів', 'Житомир', 'Одеса'];
            foreach ($cities as $c) {
                echo "<option value='$c'" . ($city == $c ? ' selected' : '') . ">$c</option>";
            }
            ?>
        </select><br>

        Улюблені ігри:<br>
        <?php
        $allGames = ['футбол', 'баскетбол', 'волейбол', 'шахи', 'World of Tanks'];
        foreach ($allGames as $game) {
            $checked = in_array($game, $games) ? 'checked' : '';
            echo "<label><input type='checkbox' name='games[]' value='$game' $checked> $game</label><br>";
        }
        ?>

        <label>Про себе:<br>
            <textarea name="about" rows="5" cols="40"><?= htmlspecialchars($about) ?></textarea>
        </label><br>

        <label>Фотографія:
            <input type="file" name="photo">
        </label><br><br>

        <input type="submit" value="Зареєструватися">
    </form>

</body>

</html>