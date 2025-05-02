<?php
require_once 'Student.php';
require_once 'Programmer.php';

// Студент
$student = new Student(180, 70, 20, "УЖП", 2);
echo "<h3>Студент:</h3>";
echo $student . "<br>";

// Змінити масу і зріст
$student->setHeight(182);
$student->setWeight(72);

// Підвищити курс
$student->promote();
echo "<strong>Після змін:</strong><br>";
echo $student . "<br><br>";

// Програміст
$programmer = new Programmer(175, 80, 30, ['PHP', 'JavaScript'], 5);
echo "<h3>Програміст:</h3>";
echo $programmer . "<br>";

// Додати мову
$programmer->addLanguage('Python');

// Змінити масу
$programmer->setWeight(78);
echo "<strong>Після змін:</strong><br>";
echo $programmer;
