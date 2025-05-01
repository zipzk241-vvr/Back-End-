<?php
$date1 = '10-02-2015';
$date2 = '25-03-2015';

$dt1 = DateTime::createFromFormat('d-m-Y', $date1);
$dt2 = DateTime::createFromFormat('d-m-Y', $date2);
$interval = $dt1->diff($dt2)->days;

echo "<p>Кількість днів між $date1 і $date2: <strong>$interval</strong></p>";
