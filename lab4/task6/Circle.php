<?php
class Circle
{
    private float $x;
    private float $y;
    private float $radius;

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

    /**
     * Перевіряє, чи перетинається коло з іншим
     * @param Circle $other
     * @return bool
     */
    public function intersectsWith(Circle $other): bool
    {
        $dx = $this->x - $other->getX();
        $dy = $this->y - $other->getY();
        $distance = sqrt($dx ** 2 + $dy ** 2);

        return $distance <= ($this->radius + $other->getRadius());
    }
}
