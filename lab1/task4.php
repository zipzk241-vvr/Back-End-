<!DOCTYPE html>
<html lang="uk">
<head>
</head>

<body>
    <?php
    $month = 5; 
    $season = "";

    if ($month == 12 || $month == 1 || $month == 2) {
        $season = "зима";
    } elseif ($month >= 3 && $month <= 5) {
        $season = "весна";
    } elseif ($month >= 6 && $month <= 8) {
        $season = "літо";
    } elseif ($month >= 9 && $month <= 11) {
        $season = "осінь";
    } else {
        $season = "некоректний номер місяця";
    }

    echo "Місяць №".$month." відповідає порі року: $season.";
    ?>
</body>

</html>