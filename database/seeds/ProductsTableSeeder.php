<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <10 ; $i++) {

            DB::table('products')->insert([
                'product_name' => "Product Name ". $i ,
                'product_price' => "500 tk",
                'product_pic' =>  "product.png",
                'user_id' => rand(1, 5),
                'listing_id'  => rand(1, 5)
            ]);
    	}
    }
}
