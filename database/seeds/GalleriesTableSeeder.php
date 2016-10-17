<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <10 ; $i++) {

            DB::table('galleries')->insert([
                'title' => "This is title  ". $i ,                
                'gallery_pic' =>  "gallery.png",
                'user_id' => rand(1, 5),
                'listing_id'  => rand(1, 5)
            ]);
    	}
    }
}
