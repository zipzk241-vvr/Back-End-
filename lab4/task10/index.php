<?php
require_once 'Student.php';
require_once 'Programmer.php';

$student = new Student(175, 65, 19, "УЖП", 2);
$programmer = new Programmer(180, 80, 28, ['PHP', 'C++'], 4);

echo "<h3>Прибирання студентом:</h3>";
$student->cleanRoom();
$student->cleanKitchen();

echo "<h3>Прибирання програмістом:</h3>";
$programmer->cleanRoom();
$programmer->cleanKitchen();
