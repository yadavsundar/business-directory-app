<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id', 'category_icon', 'description'];


    public function listings()
    {
        return $this->belongsToMany('DirectoryApp\Models\Listing');
    }     


}
