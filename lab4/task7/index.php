<?php
require_once 'FileManager.php';

// Запис у файл
FileManager::write('file1.txt', 'Привіт світу із PHP!');
FileManager::write('file1.txt', 'Ще один рядок із PHP.');

// Читання
echo "<h3>Вміст file1.txt:</h3>";
echo nl2br(FileManager::read('file1.txt'));

// Очищення
FileManager::clear('file1.txt');

echo "<h3>Після очищення:</h3>";
echo nl2br(FileManager::read('file1.txt'));
