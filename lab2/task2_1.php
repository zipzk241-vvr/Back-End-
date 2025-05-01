<?php
function findDuplicates($array)
{
    $counts = array_count_values($array);
    $duplicates = [];

    foreach ($counts as $value => $count) {
        if ($count > 1) {
            $duplicates[] = $value;
        }
    }

    return $duplicates;
}

$arr = [4, 7, 2, 4, 9, 7, 3, 2];
echo "Повторювані елементи: " . implode(", ", findDuplicates($arr)) . "<br>";
?>