<?php

namespace App;

class UserService
{
    /** @var UserRepo */
    private UserRepo $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function filterUserByAge(int $age)
    {
        $users = $this->userRepo->getUsers();
        var_dump($users);
    }
}