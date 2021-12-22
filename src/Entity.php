<?php

namespace App;

abstract class Entity implements Repository
{
    abstract public function create(User $obj): User;
    abstract public function get(): User;
    abstract public function update(User $obj): User;
    abstract public function delete(User $obj): User;
}