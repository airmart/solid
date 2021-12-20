<?php

namespace App;

class UserPostgresRepo implements UserRepo
{

    /**
     * @inheritDoc
     */
    public function getUsers(): array
    {
        printf("Используем подключение к POSTGRES и получаем пользователей");
        return ['age' => 15, 'username' => 'Пользователь из POSTGRES ДБ'];
    }
}