<?php

namespace App;

interface Repository
{
    /**
     * @param User $obj
     * @return User
     */
    public function create(User $obj): User;

    /**
     * @return User
     */
    public function get(): User;

    /**
     * @param User $obj
     * @return User
     */
    public function update(User $obj): User;

    /**
     * @param User $obj
     * @return User
     */
    public function delete(User $obj): User;
}