<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
            array(
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' => '12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 2',
                'email' => 'admin2@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 3',
                'email' => 'admin3@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 4',
                'email' => 'admin4@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 5',
                'email' => 'admin5@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 6',
                'email' => 'admin6@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 7',
                'email' => 'admin7@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 8',
                'email' => 'admin8@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
            array(
                'name' => 'Admin 9',
                'email' => 'admin9@gmail.com',
                'email_verified_at' => date("Y-m-d H:i:s"),
                'password' =>'12345678',
                'avatar' => 'default.jpg'
            ),
        ));
    }
}
