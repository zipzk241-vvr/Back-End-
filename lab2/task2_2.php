<?php
function generatePetName($syllables, $count = 3)
{
    $name = '';
    for ($i = 0; $i < $count; $i++) {
        $name .= $syllables[array_rand($syllables)];
    }
    return ucfirst($name);
}

$syllables = ['ко', 'му', 'ша', 'ра', 'лу', 'ні', 'ті'];
echo "Ім’я тваринки: " . generatePetName($syllables) . "<br>";
?>