<?php

namespace App;

class Employee extends Person
{
    /** @var int */
    private int $inn;
    /** @var int */
    private int $number;
    /** @var int */
    private int $snils;

    public function __construct(string $firstName,
                                string $lastName,
                                int $age,
                                int $inn,
                                int $number,
                                int $snils)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->inn = $inn;
        $this->number = $number;
        $this->snils = $snils;
    }

    public function greeting(): void
    {
        echo 'Привет я работник и меня зовут ' . $this->getFirstName();
    }
}