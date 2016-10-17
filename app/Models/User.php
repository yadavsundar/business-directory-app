<?php

namespace DirectoryApp\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password', 'plan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function listings()
    {
        return $this->hasMany('DirectoryApp\Models\Listing');
    }

    public function products()
    {
        return $this->hasMany('DirectoryApp\Models\Product');
    } 

    public function employees()
    {
        return $this->hasMany('DirectoryApp\Models\Employee');
    } 

    public function galleries()
    {
        return $this->hasMany('DirectoryApp\Models\Gallery');
    }   

    public function reviews()
    {
        return $this->hasMany('DirectoryApp\Models\Review');
    }       


}
