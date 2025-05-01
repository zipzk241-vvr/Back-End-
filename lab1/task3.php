<!DOCTYPE html>
<html lang="uk">
<head>
</head>

<body>
    <?php
    $uah = 1500; // сума в гривнях
    $usdRate = 41.61; // курс долара 
    $usd = floor($uah / $usdRate); // переводимо в долари, ціле число
    
    echo "$uah грн. можна обміняти на $usd долар";
    ?>
</body>

</html>