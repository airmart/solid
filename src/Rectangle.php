<?php

namespace App;

class Rectangle
{
    private $width;
    private $height;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    public function calcArea() {
        return $this->width * $this->height;
    }
}