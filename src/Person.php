<?php

namespace App;

class Person
{
    /** @var string */
    private string $firstName;
    /** @var string */
    private string $lastName;
    /** @var int */
    private int $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function greeting()
    {
        return printf("Привет я человек и меня зовут " . $this->firstName . "\n");
    }

    /**
     * @return string
     */
    public function fullName(): string
    {
        return 'Фамилия - ' . $this->lastName . ' Имя - ' . $this->firstName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age < 0) {
            $this->age = 0;
        }
        else {
            $this->age = $age;
        }
    }
}

