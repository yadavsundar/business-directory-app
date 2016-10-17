<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'position', 'mail', 'joined',
     'employee_pic', 'user_id', 'listing_id' ];

    public function user()
    {
        return $this->belongsTo('DirectoryApp\Models\User');
    } 

    public function listing()
    {
        return $this->belongsTo('DirectoryApp\Models\Listing');
    } 

    public static $rules = [
        'name' => 'required',
        'listing_id' => 'required',
        'position' => 'required',
        'email' => 'email',
        'employee_pic' => 'mimes:jpeg,png'
    ];

        
}
