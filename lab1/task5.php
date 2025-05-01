<!DOCTYPE html>
<html lang="uk">

<head>
</head>

<body>
    <?php
    $char = 'п'; 
    
    switch (mb_strtolower($char, 'UTF-8')) {
        case 'а':
        case 'е':
        case 'є':
        case 'и':
        case 'і':
        case 'ї':
        case 'о':
        case 'у':
        case 'ю':
        case 'я':
            echo "Символ '$char' — голосна літера.";
            break;
        default:
            echo "Символ '$char' — приголосна літера.";
            break;
    }
    ?>
</body>

</html>