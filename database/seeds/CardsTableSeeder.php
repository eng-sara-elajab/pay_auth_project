<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert(array(
            array(
                'card_pan' => '11111111',
                'card_expiry' => '2020',
                'card_user' => 'User 1',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 1',
                'user_id' => 1
            ),
            array(
                'card_pan' => '22222222',
                'card_expiry' => '2020',
                'card_user' => 'User 2',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 2',
                'user_id' => 2
            ),
            array(
                'card_pan' => '33333333',
                'card_expiry' => '2020',
                'card_user' => 'User 3',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 3',
                'user_id' => 3
            ),
            array(
                'card_pan' => '44444444',
                'card_expiry' => '2020',
                'card_user' => 'User 4',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 4',
                'user_id' => 4
            ),
            array(
                'card_pan' => '55555555',
                'card_expiry' => '2020',
                'card_user' => 'User 5',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 5',
                'user_id' => 5
            ),
            array(
                'card_pan' => '66666666',
                'card_expiry' => '2020',
                'card_user' => 'User 6',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 6',
                'user_id' => 6
            ),
            array(
                'card_pan' => '77777777',
                'card_expiry' => '2020',
                'card_user' => 'User 7',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 7',
                'user_id' => 7
            ),
            array(
                'card_pan' => '88888888',
                'card_expiry' => '2020',
                'card_user' => 'User 8',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 8',
                'user_id' => 8
            ),
            array(
                'card_pan' => '99999999',
                'card_expiry' => '2020',
                'card_user' => 'User 9',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 9',
                'user_id' => 9
            ),
            array(
                'card_pan' => '10101010',
                'card_expiry' => '2020',
                'card_user' => 'User 10',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 10',
                'user_id' => 10
            ),
            array(
                'card_pan' => '111111111',
                'card_expiry' => '2020',
                'card_user' => 'User 11',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 11',
                'user_id' => 11
            ),
            array(
                'card_pan' => '12121212',
                'card_expiry' => '2020',
                'card_user' => 'User 12',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 12',
                'user_id' => 12
            ),
            array(
                'card_pan' => '13131313',
                'card_expiry' => '2020',
                'card_user' => 'User 13',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 13',
                'user_id' => 13
            ),
            array(
                'card_pan' => '14141414',
                'card_expiry' => '2020',
                'card_user' => 'User 14',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 14',
                'user_id' => 14
            ),
            array(
                'card_pan' => '15151515',
                'card_expiry' => '2020',
                'card_user' => 'User 15',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 15',
                'user_id' => 15
            ),
            array(
                'card_pan' => '16161616',
                'card_expiry' => '2020',
                'card_user' => 'User 16',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 16',
                'user_id' => 16
            ),
            array(
                'card_pan' => '17171717',
                'card_expiry' => '2020',
                'card_user' => 'User 17',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 17',
                'user_id' => 17
            ),
            array(
                'card_pan' => '18181818',
                'card_expiry' => '2020',
                'card_user' => 'User 18',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 18',
                'user_id' => 18
            ),
            array(
                'card_pan' => '19191919',
                'card_expiry' => '2020',
                'card_user' => 'User 19',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 19',
                'user_id' => 19
            ),
            array(
                'card_pan' => '20202020',
                'card_expiry' => '2020',
                'card_user' => 'User 20',
                'card_added' => date("Y-m-d H:i:s"),
                'card_label' => 'Card 20',
                'user_id' => 20
            ),
        ));
    }
}
