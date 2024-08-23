<?php

namespace App\Models;

class User
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
    public function logMessage()
    {
        return "Welcome Back! $this->user.";
    }
}
