<?php

namespace App\Repositories;

use App\Models\User;

Class UserRepository implements Repository
{
    public function store(array $data): User
    {
        return new User($data['username'], $data['password']);
    }

    public function show(int $id): User
    {
        // достали юзера по $id
        return new User('name', 'pass');
    }

    public function update(int $id, array $data): User
    {
        // достали юзера по $id
        $user = new User('name', 'pass');
        $user->setUsername($data['username']);
        $user->setPassword($data['password']);
        return $user;
    }

    public function delete(int $id): void
    {
        // достали юзера по $id
        $user = new User('name', 'pass');
        unset($user);
    }
}
