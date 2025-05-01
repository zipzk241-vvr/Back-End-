<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <?php
    $number = mt_rand(100, 999); 
    echo "Згенероване число: $number<br>";

    $hundreds = intdiv($number, 100);
    $tens = intdiv($number % 100, 10);
    $units = $number % 10;
    $sum = $hundreds + $tens + $units;
    echo "Сума цифр: $sum<br>";

    $reversed = $units * 100 + $tens * 10 + $hundreds;
    echo "Зворотне число: $reversed<br>";

    $digits = [$hundreds, $tens, $units];
    rsort($digits); 
    $maxNumber = $digits[0] * 100 + $digits[1] * 10 + $digits[2];
    echo "Найбільше можливе число з тих самих цифр: $maxNumber";
    ?>
</body>

</html>