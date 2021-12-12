<?php

namespace App;

class Rectangle
{
    /** @var int */
    private int $width;
    /** @var int */
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function calcArea(): int
    {
        return $this->width * $this->height;
    }
}