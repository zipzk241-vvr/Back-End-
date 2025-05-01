<?php
    function generatePassword($length = 12) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';
        for ($i = 0; $i < $length; $i++) { $password .=$chars[mt_rand(0, strlen($chars) - 1)]; } return $password; } function
            isStrongPassword($password) { return ( preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) &&
            preg_match('/[0-9]/', $password) && preg_match('/[\W_]/', $password) && strlen($password)>= 8
            );
    }

    $generatedPassword = generatePassword(12);
    $isStrong = isStrongPassword($generatedPassword);
?>

<p>Згенерований пароль: <strong><?= $generatedPassword ?></strong></p>
<p>Пароль <?= $isStrong ? '<span style="color:green;">міцний</span>' : '<span style="color:red;">слабкий</span>' ?>
</p>