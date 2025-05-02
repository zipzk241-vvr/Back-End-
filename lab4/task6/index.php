<?php
require_once 'Circle.php';

$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(7, 0, 4);

echo $circle1 . "<br>";
echo $circle2 . "<br>";

if ($circle1->intersectsWith($circle2)) {
    echo "<strong>Кола перетинаються</strong>";
} else {
    echo "<strong>Кола не перетинаються</strong>";
}
?>