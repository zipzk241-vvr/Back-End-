<?php
function sortUsers(&$users, $by = 'age')
{
    if ($by === 'age') {
        asort($users); // Сортує за значенням - вік
    } elseif ($by === 'name') {
        ksort($users); // Сортує за ключем - ім’я
    }
}

$users = [
    "Олег" => 25,
    "Ірина" => 19,
    "Богдан" => 30,
    "Анна" => 22
];

sortUsers($users, 'age');

echo "<br>Відсортовані користувачі:<br>";
foreach ($users as $name => $age) {
    echo "$name: $age<br>";
}
?>