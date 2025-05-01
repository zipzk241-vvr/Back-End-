<?php
$uploadDir = 'uploads/';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = uniqid('img_', true) . '.' . $ext;
        $destination = $uploadDir . $newName;

        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $message = "Зображення успішно завантажено: <br><img src='$destination' height='200'>";
        } else {
            $message = "Помилка при збереженні файлу.";
        }
    } else {
        $message = "Помилка завантаження: " . $file['error'];
    }
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <h2>Завантажити зображення на сервер</h2>
    <form method="post" enctype="multipart/form-data">
        <label>Оберіть файл: <input type="file" name="image" accept="image/*" required></label><br><br>
        <input type="submit" value="Завантажити">
    </form>

    <p><?= $message ?></p>
</body>

</html>