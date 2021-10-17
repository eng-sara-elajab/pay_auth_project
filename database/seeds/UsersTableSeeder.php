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
        DB::table('users')->insert(array(
            array(
                'user_name' => 'User 1',
                'user_phone' => 'user1@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '1111',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 2',
                'user_phone' => 'user2@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '2222',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 3',
                'user_phone' => 'user3@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '3333',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 4',
                'user_phone' => 'user4@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '4444',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 5',
                'user_phone' => 'user5@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '5555',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 6',
                'user_phone' => 'user6@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '6666',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 7',
                'user_phone' => 'user7@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '7777',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 8',
                'user_phone' => 'user8@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '8888',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 9',
                'user_phone' => 'user9@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '9999',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 10',
                'user_phone' => 'user10@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '10101010',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 11',
                'user_phone' => 'user11@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '11111111',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 12',
                'user_phone' => 'user12@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '12121212',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 13',
                'user_phone' => 'user13@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '13131313',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 14',
                'user_phone' => 'user14@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '14141414',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 15',
                'user_phone' => 'user15@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '15151515',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 16',
                'user_phone' => 'user16@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '16161616',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 17',
                'user_phone' => 'user17@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '17171717',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 18',
                'user_phone' => 'user18@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '18181818',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 19',
                'user_phone' => 'user19@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '19191919',
                'user_password' => '12345678',
                'status' => 'enabled'
            ),
            array(
                'user_name' => 'User 20',
                'user_phone' => 'user20@gmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_active' => 'default.jpg',
                'user_totp' => '20202020',
                'user_password' => '12345678',
                'status' => 'enabled'
            )
        ));
    }
}
