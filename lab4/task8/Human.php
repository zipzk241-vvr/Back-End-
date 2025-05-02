<?php

class Human
{
    private float $height;
    private float $weight;
    private int $age;

    public function __construct(float $height, float $weight, int $age)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    // GET
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

    // SET
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString(): string
    {
        return "Зріст: {$this->height} см, Маса: {$this->weight} кг, Вік: {$this->age} років";
    }
}
