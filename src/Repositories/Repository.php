<?php

namespace App\Repositories;

use App\Models\Entity;

interface Repository
{
    /**
     * @param Entity $obj
     * @return Entity
     */
    public function store(Entity $obj): Entity;

    /**
     * @return Entity
     */
    public function show(): Entity;

    /**
     * @param int $id
     * @param Entity $obj
     * @return Entity
     */
    public function update(int $id, Entity $obj): Entity;

    /**
     * @param int $id
     * @param Entity $obj
     */
    public function delete(int $id,Entity $obj);
}