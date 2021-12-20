<?php

namespace App;

interface UserRepo
{
    /** @return User[] */
    public function getUsers(): array;
}