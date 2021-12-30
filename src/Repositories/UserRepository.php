<?php

namespace App\Repositories;

use App\Models\User;

Class UserRepository implements Repository
{
    /**
     * @param array $data
     * @return User
     */
    public function store(array $data): User
    {
        return new User($data['id'], $data['username'], $data['password']);
    }

    /**
     * @param int $id
     * @return User
     */
    public function show(int $id): User
    {
        // достали юзера по $id
        return new User('0', 'name', 'pass');
    }

    /**
     * @param int $id
     * @param array $data
     * @return User
     */
    public function update(int $id, array $data): User
    {
        // достали юзера по $id
        $user = new User('0', 'name', 'pass');
        $user->setId($data['id']);
        $user->setUsername($data['username']);
        $user->setPassword($data['password']);
        return $user;
    }

    /**
     * @param int $id
     */
    public function delete(int $id): void
    {
        // достали юзера по $id
        $user = new User('0', 'name', 'pass');
        unset($user);
    }
}
