<?php
require_once 'Student.php';
require_once 'Programmer.php';

echo "<h3>Студент народжує дитину:</h3>";
$student = new Student(180, 70, 21, "УЖП", 3);
$student->giveBirth();

echo "<h3>Програміст народжує дитину:</h3>";
$dev = new Programmer(175, 75, 30, ['PHP', 'Python'], 5);
$dev->giveBirth();
