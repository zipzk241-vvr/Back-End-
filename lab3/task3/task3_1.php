<?php
$filename = "comments.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name']) && !empty($_POST['comment'])) {
    $entry = htmlspecialchars($_POST['name']) . "||" . htmlspecialchars($_POST['comment']) . "\n";
    file_put_contents($filename, $entry, FILE_APPEND);
}

$comments = [];
if (file_exists($filename)) {
    $file = fopen($filename, "r");
    while (!feof($file)) {
        $line = fgets($file);
        if (trim($line)) {
            $parts = explode("||", $line);
            if (count($parts) === 2) {
                $comments[] = ['name' => $parts[0], 'comment' => $parts[1]];
            }
        }
    }
    fclose($file);
}
?>

<form method="post">
    Ім’я: <input type="text" name="name" required><br>
    Коментар: <textarea name="comment" required></textarea><br>
    <input type="submit" value="Надіслати">
</form>

<h3>Коментарі:</h3>
<table border="1">
    <tr>
        <th>Ім’я</th>
        <th>Коментар</th>
    </tr>
    <?php foreach ($comments as $c): ?>
        <tr>
            <td><?= $c['name'] ?></td>
            <td><?= $c['comment'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>