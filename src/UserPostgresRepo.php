<?php

namespace App;

class UserPostgresRepo implements UserRepo
{

    /** @return array */
    public function getUsers(): array
    {
        echo 'Используем подключение к POSTGRES и получаем пользователей';
        return ['age' => 15, 'username' => 'Пользователь из POSTGRES ДБ'];
    }
}