<?php

use Illuminate\Database\Seeder;



class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i < 25; $i++) { 
        DB::table('listings')->insert([

            'name' => "business " . $i,
            'logo' => "logo.png",
            'location' => str_random(5).", ". str_random(5).", " .str_random(5),
            'phone_number' => "01813123456",
            'mobile_number' => "01813123456",
            'fax' => "business{$i}" ."@mail.com",
            'email' =>  "business{$i}" ."@mail.com",
            'website' =>  "business{$i}" .".com",
            'establishment_year' => "2015",
            'manager' => str_random(5)." ". str_random(5),
            'employee_number' => "08-10",
            'contact_person' => str_random(5)." ". str_random(5),
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'saturday' => "09:00 - 06:00",
            'monday' => "09:00 - 06:00",
            'tuesday' => "09:00 - 06:00",
            'wednesday' => "09:00 - 06:00",
            'thursday' => "09:00 - 06:00",
            'friday' => "09:00 - 06:00",
            'keyword' => str_random(5).", ". str_random(5) .", ". str_random(5).", ". str_random(5),            

            'user_id' => rand(15, 23),
            
        ]);
    	}

    }
}
