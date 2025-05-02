<?php
require_once 'HouseCleaning.php';

abstract class Human implements HouseCleaning
{
    protected float $height;
    protected float $weight;
    protected int $age;

    public function __construct(float $height, float $weight, int $age)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function setHeight(float $h): void
    {
        $this->height = $h;
    }

    public function setWeight(float $w): void
    {
        $this->weight = $w;
    }

    public function setAge(int $a): void
    {
        $this->age = $a;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString(): string
    {
        return "Зріст: {$this->height}, Вага: {$this->weight}, Вік: {$this->age}";
    }

    public function giveBirth(): void
    {
        echo "Процес народження дитини...<br>";
        $this->onBirthMessage();
    }

    abstract protected function onBirthMessage(): void;
}
