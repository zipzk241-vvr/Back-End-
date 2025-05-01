<?php
    $cities = $_POST['cities'] ?? '';
    $sortedCities = '';
    if (!empty($cities)) {
        $cityArray = explode(' ', trim($cities));
        sort($cityArray, SORT_STRING | SORT_FLAG_CASE);
        $sortedCities = implode(', ', $cityArray);
    }
?>

<form method="post">
    <label>Введіть міста (через пробіл): <input type="text" name="cities"
            value="<?= htmlspecialchars($cities) ?>"></label><br>
    <input type="submit" value="Сортувати">
</form>

<?php if (!empty($sortedCities)): ?>
    <p>Відсортовані міста: <?= htmlspecialchars($sortedCities) ?></p>
<?php endif; ?>