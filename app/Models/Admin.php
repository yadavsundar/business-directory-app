<?php

namespace DirectoryApp\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{


    protected $fillable = [
        'username', 'email', 'password',
    ];
}
