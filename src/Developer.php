<?php

namespace App;

class Developer extends Employee
{
    /** @var string */
    private string $level;
    /** @var string */
    private string $language;

    public function __construct(string $firstName,
                                string $lastName,
                                int $age,
                                int $inn,
                                int $number,
                                int $snils,
                                string $level,
                                string $language)
    {
        parent::__construct($firstName, $lastName, $age, $inn, $number, $snils);
        $this->level = $level;
        $this->language = $language;
    }

    public function greeting(): void
    {
        echo 'Привет я разработчик и меня зовут ' . $this->getFirstName();
    }
}