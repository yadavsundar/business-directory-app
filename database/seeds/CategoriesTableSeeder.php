<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <50 ; $i++) {

            DB::table('categories')->insert([
                'name' => "Sub Category ". $i ,
                'slug' => "sub-category"."-". $i,
                'parent_id' => rand(1,15),
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla arcu non maximus viverra. Nulla vel nisi venenatis, dictum neque et, rutrum ante. Cras at sapien eu risus dapibus scelerisque. Integer sed accumsan erat. In euismod neque erat, nec dictum justo tempus fermentum. "

            ]);
    	}

    }
}
