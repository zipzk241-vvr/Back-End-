<?php
$fullPath = 'D:\Programs\wampserver\www\lab2\myfile.txt';
$filename = pathinfo($fullPath, PATHINFO_FILENAME);
echo "<p>Ім'я файлу без розширення: <strong>$filename</strong></p>";
