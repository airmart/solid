<?php

namespace App\Models;

class Post extends Entity
{
    /** @var string */
    private string $title;

    /** @var string */
    private string $text;

    /** @var int */
    private int $userId;

    /** @var int */
    private int $id;

    public function __construct(string $title, string $text, int $userId)
    {
        $this->title = $title;
        $this->text = $text;
        $this->userId = $userId;
        $this->id = (int)uniqid();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function __destruct()
    {
        echo 'Пост с Id' . $this->id . ' был удален';
    }
}
