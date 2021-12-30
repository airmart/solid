<?php

namespace App\Models;

class User extends Entity
{
    /** @var string */
    private string $username;

    /** @var string */
    private string $password;

    /** @var int */
    private int $id;

    public function __construct(int $id, string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        echo 'Юзер с Id ' . $this->id . ' был удален' . PHP_EOL;
    }
}
