<?php

namespace App;

class Car
{
    /** @var Engine */
    private Engine $engine;
    /** @var Wheel[] */
    private array $wheels;

    public function __construct()
    {
        $this->engine = new Engine();

        for ($i = 0; $i <= 3; $i++) {
            $this->wheels[] = new Wheel();
        }
    }

    public function drive(): void
    {
        $this->engine->drive();

        for ($i = 0; $i <= 3; $i++) {
            $this->wheels[$i]->drive();
        }
    }
}