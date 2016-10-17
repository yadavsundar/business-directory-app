<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name',  'product_price' , 'product_pic', 'user_id', 'listing_id']; 

    public function user()
    {
        return $this->belongsTo('DirectoryApp\Models\User');
    } 

    public function listing()
    {
        return $this->belongsTo('DirectoryApp\Models\Listing');
    }      
}
