<?php
namespace shape;
class Circle extends Shape
{
    protected float $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    function calculateArea(): float{
        return pi() * pow($this->radius,2);
    }

    function calculatePerimeter() : float{
        return  2 * $this->radius * pi();
    }
}