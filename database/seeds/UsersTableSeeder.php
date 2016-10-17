<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <10 ; $i++) {

            DB::table('users')->insert([
                'first_name' => "First Name ". $i ,
                'last_name' => "Last Name". $i,
                'username' => "FirstName" . $i,
                'email' => "user{$i}@mail.com",
                'password' =>  bcrypt("123456"),
                'plan' => 'A'

            ]);
    	}
    }
}
