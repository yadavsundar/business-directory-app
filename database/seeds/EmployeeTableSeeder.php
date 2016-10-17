<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <10 ; $i++) {

            DB::table('employees')->insert([
                'name' => "Employee Name ". $i ,
                'position' => "Position ". $i,
                'joined' => "january, 2015" ,
                'mail' => "employee{$i}@mail.com",
                'employee_pic' =>  "employee.png",
                'user_id' => rand(1, 5),
                'listing_id'  => rand(1, 5)
            ]);
    	}
    }
}
