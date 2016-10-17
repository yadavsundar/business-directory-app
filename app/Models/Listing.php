<?php

namespace DirectoryApp\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillabe = [
        'name', 'location', 'division', 'district', 'phone_number', 'mobile_number', 'fax',
        'email', 'website', 'establishment_year', 'logo', 'manager', 'employee_number', 
        'contact_person', 'description', 'saturday', 'sunday', 'monday', 'tuesday',
        'wednesday', 'thursday', 'friday', 'keyword', 'user_id',
         'category_id'
    ]; 

    public static $rules = [
    	'name' 				 => 'required',
    	'location' 			 => 'required',
    	//'division'		 	 => 'required',
    	//'district' 			 => 'required',
    	'mobile_number' 	 => 'required',
        'email'              => 'required',
    	'establishment_year' => 'required',
    	'manager' 			 => 'required',
    	'contact_person' 	 => 'required',
    	'description' 		 => 'required',
        'logo'   	         => 'required|mimes:jpeg,png'

    ];

    public function user()
    {
        return $this->belongsTo('DirectoryApp\Models\User');
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

    public function categories()
    {
        return $this->belongsToMany('DirectoryApp\Models\Category');
    }    


   
}
