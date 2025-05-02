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

    // GET
    public function getUniversity(): string
    {
        return $this->university;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    // SET
    public function setUniversity(string $university): void
    {
        $this->university = $university;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    // Метод підвищення курсу
    public function promote(): void
    {
        $this->course++;
    }

    public function __toString(): string
    {
        return parent::__toString() . ", Університет: {$this->university}, Курс: {$this->course}";
    }
}
