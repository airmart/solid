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

        if ($this->width < 1 || $this->height < 1){
            error_log('Such values are not valid');
        }
    }

    /**
     * @return int
     */
    public function calcArea(): int
    {
        return $this->width * $this->height;
    }
}