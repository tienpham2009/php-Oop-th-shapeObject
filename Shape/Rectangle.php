<?php

namespace shape;

class Rectangle extends Shape
{
    public float $width;
    public float $height;

    public function __construct($name,
                                $width,
                                $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): float
    {
        return ($this->height + $this->width) * 2;
    }
}