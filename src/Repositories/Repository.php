<?php

namespace App\Repositories;

use App\Models\Entity;

interface Repository
{
    /**
     * @param array $data
     * @return Entity
     */
    public function store(array $data): Entity;

    /**
     * @return Entity
     */
    public function show(): Entity;

    /**
     * @param int $id
     * @param array $data
     * @return Entity
     */
    public function update(int $id, array $data): Entity;

    /**
     * @param int $id
     * @param Entity $obj
     */
    public function delete(int $id,Entity $obj);
}