<?php
class Circle
{
    private float $x;
    private float $y;
    private float $radius;

    /**
     * Конструктор для ініціалізації координат центру та радіуса
     *
     * @param float $x
     * @param float $y
     * @param float $radius
     */
    public function __construct(float $x, float $y, float $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    // GET методи
    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    // SET методи
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    // __toString
    public function __toString(): string
    {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }
}
