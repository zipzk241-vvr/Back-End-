<?php
function createArray()
{
    $length = mt_rand(3, 7);
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = mt_rand(10, 20);
    }

    return $array;
}

function mergeAndProcess($arr1, $arr2)
{
    $merged = array_merge($arr1, $arr2);
    $unique = array_unique($merged);
    sort($unique);
    return $unique;
}

$array1 = createArray();
$array2 = createArray();

echo "Масив 1: " . implode(", ", $array1) . "<br>";
echo "Масив 2: " . implode(", ", $array2) . "<br>";

$result = mergeAndProcess($array1, $array2);
echo "Результат: " . implode(", ", $result) . "<br>";
?>