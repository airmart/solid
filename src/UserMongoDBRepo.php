<?php


namespace App;


class UserMongoDBRepo implements UserRepo
{
    public function getUsers(): array
    {
        printf("Используем подключение к монго и получаем пользователей");
        return ['age' => 15, 'username' => 'Пользователь из МонгоДБ'];
    }
}