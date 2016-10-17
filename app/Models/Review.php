<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['body', 'rating', 'user_id', 'listing_id']; 

    public function user()
    {
        return $this->belongsTo('DirectoryApp\Models\User');
    } 

    public function listing()
    {
        return $this->belongsTo('DirectoryApp\Models\Listing');
    }     
}
