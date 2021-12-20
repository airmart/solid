<?php

namespace App;

abstract class Entity extends User
{
    abstract protected function create(User $obj): User;
    abstract protected function get(): User;
    abstract protected function update(User $obj): User;
    abstract protected function delete(User $obj): User;
}