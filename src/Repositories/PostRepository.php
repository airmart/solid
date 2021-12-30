<?php

namespace App\Repositories;

use App\Models\Entity;
use App\Models\Post;

class PostRepository implements Repository
{

    /**
     * @param array $data
     * @return Post
     */
    public function store(array $data): Post
    {
        return new Post($data['id'], $data['title'], $data['text'], $data['userId']);
    }

    /**
     * @param int $id
     * @return Post
     */
    public function show(int $id): Post
    {
        //достали Пост по id
        return new Post('1', 'title', 'text', '1');
    }

    /**
     * @param int $id
     * @param array $data
     * @return Post
     */
    public function update(int $id, array $data): Post
    {
        //достали Пост по id
        $post = new Post('1', 'title', 'text', '1');
        $post->setId($data['id']);
        $post->setTitle($data['title']);
        $post->setText($data['text']);
        $post->setUserId($data['userId']);
        return $post;
    }

    /**
     * @param int $id
     */
    public function delete(int $id): void
    {
        //достали Пост по id
        $post = new Post('1', 'title', 'text', '1');
        unset($post);
    }
}
