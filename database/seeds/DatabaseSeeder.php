<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AdminsTableSeeder::class);
        // $this->call(ListingsTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(ListingsTableSeeder::class);
        //$this->call(EmployeeTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
    }
}
