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
     * @param int $id
     * @return Entity
     */
    public function show(int $id): Entity;

    /**
     * @param int $id
     * @param array $data
     * @return Entity
     */
    public function update(int $id, array $data): Entity;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}