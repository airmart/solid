<?php

namespace App;

class UserMongoDBRepo implements UserRepo
{
    /** @return array[] */
    public function getUsers(): array
    {
        echo 'Используем подключение к монго и получаем пользователей';
        return [['age' => 15, 'username' => 'Пользователь из МонгоДБ']];
    }
}