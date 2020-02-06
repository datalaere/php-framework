<?php

namespace App\Models;

use PHP\MVC\Model;

class UserModel extends Model
{
    public function boot()
    {
        return $this->database;
    }
}