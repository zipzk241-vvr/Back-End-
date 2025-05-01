<?php
$filename = "file1.txt";

if (file_exists($filename)) {
    $words = preg_split('/\s+/', file_get_contents($filename));
    $words = array_filter($words); // прибрати порожні
    sort($words, SORT_STRING | SORT_FLAG_CASE);
    file_put_contents("sorted_words.txt", implode(" ", $words));
    echo "Слова відсортовані та збережені у <strong>sorted_words.txt</strong>";
} else {
    echo "Файл words.txt не знайдено.";
}
?>