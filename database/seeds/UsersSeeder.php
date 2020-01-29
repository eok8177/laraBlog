<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1, 
                'login' => 'admin', 
                'email' => 'admin@gmail.com', 
                'first_name' => 'Admin', 
                'last_name' => 'Root', 
                'email_verified_at' => '2020-01-01', 
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'login' => 'user', 
                'email' => 'user@gmail.com', 
                'first_name' => 'User', 
                'last_name' => 'Free', 
                'email_verified_at' => '2020-01-01', 
                'password' => bcrypt('123456'),
                'role' => 'user'
            ]
		]);
    }
}
