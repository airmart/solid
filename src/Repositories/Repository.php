<?php

namespace App\Repositories;

use App\Models\Entity;

interface Repository
{
    /**
     * @param Entity $obj
     * @return Entity
     */
    public function create(Entity $obj): Entity;

    /**
     * @return Entity
     */
    public function get(): Entity;

    /**
     * @param Entity $obj
     * @return Entity
     */
    public function update(Entity $obj): Entity;

    /**
     * @param Entity $obj
     * @return Entity
     */
    public function delete(Entity $obj): Entity;
}