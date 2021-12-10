<?php

namespace App;

class User
{
    private string $username;
    private string $password;
    private int $id;

    public function __construct(string $u, string $p)
    {
        $this->username = $u;
        $this->password = $p;
        $this->id = uniqid();
    }

    public function __get()
    {
        if (!$this->username){
            return $this->username;
        }
        if (!$this->password){
            return $this->password;
        }
        if (!$this->id){
            return $this->id;
        }
        return error_log('Nothing to get');
    }

    public function __set($content)
    {
        if (!$this->username){
            return $this->username = $content;
        }
        if (!$this->password){
            return $this->password = $content;
        }
        return error_log('Nothing to set');
    }
}