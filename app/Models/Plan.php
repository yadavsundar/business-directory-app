<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name',  'slug' , 'business', 'category', 'keyword', 'photo', 'price', 'duration'];    
}
