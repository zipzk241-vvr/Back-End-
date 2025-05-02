<?php
require_once 'Human.php';

class Student extends Human
{
    private string $university;
    private int $course;

    public function __construct(float $height, float $weight, int $age, string $university, int $course)
    {
        parent::__construct($height, $weight, $age);
        $this->university = $university;
        $this->course = $course;
    }

    public function promote(): void
    {
        $this->course++;
    }

    protected function onBirthMessage(): void
    {
        echo "Студент став батьком/матір'ю. Йому доведеться поєднувати навчання з пелюшками!<br>";
    }

    public function cleanRoom(): void
    {
        echo "Студент прибирає кімнату<br>";
    }

    public function cleanKitchen(): void
    {
        echo "Студент прибирає кухню<br>";
    }
}
