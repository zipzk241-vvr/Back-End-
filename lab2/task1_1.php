<?php
    $text = $_POST['text'] ?? '';
    $find = $_POST['find'] ?? '';
    $replace = $_POST['replace'] ?? '';
    $result = str_replace($find, $replace, $text);
?>

<form method="post">
    <label>Текст: <input type="text" name="text" value="<?= htmlspecialchars($text) ?>"></label><br>
    <label>Знайти: <input type="text" name="find" value="<?= htmlspecialchars($find) ?>"></label><br>
    <label>Замінити: <input type="text" name="replace" value="<?= htmlspecialchars($replace) ?>"></label><br>
    <label>Результат: <input type="text" value="<?= htmlspecialchars($result) ?>" readonly></label><br>
    <input type="submit" value="Замінити">
</form>