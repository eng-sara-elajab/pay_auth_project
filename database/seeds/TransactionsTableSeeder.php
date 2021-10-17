<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(array(
            array(
                'tran_amount' => '11111',
                'tran_from' => 'User 1',
                'tran_to' => 'User 2',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 1',
                'tran_info' => 'Transaction 1 information',
                'tran_uuid' => '11111',
                'tran_by' => '11111',
                'tran_for' => '11111',
                'user_id' => 1
            ),
            array(
                'tran_amount' => '22222',
                'tran_from' => 'User 2',
                'tran_to' => 'User 3',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 2',
                'tran_info' => 'Transaction 2 information',
                'tran_uuid' => '22222',
                'tran_by' => '22222',
                'tran_for' => '22222',
                'user_id' => 2
            ),
            array(
                'tran_amount' => '33333',
                'tran_from' => 'User 3',
                'tran_to' => 'User 4',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 3',
                'tran_info' => 'Transaction 3 information',
                'tran_uuid' => '33333',
                'tran_by' => '33333',
                'tran_for' => '33333',
                'user_id' => 3
            ),
            array(
                'tran_amount' => '44444',
                'tran_from' => 'User 4',
                'tran_to' => 'User 5',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 4',
                'tran_info' => 'Transaction 4 information',
                'tran_uuid' => '44444',
                'tran_by' => '44444',
                'tran_for' => '44444',
                'user_id' => 4
            ),
            array(
                'tran_amount' => '55555',
                'tran_from' => 'User 5',
                'tran_to' => 'User 6',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 5',
                'tran_info' => 'Transaction 5 information',
                'tran_uuid' => '55555',
                'tran_by' => '55555',
                'tran_for' => '55555',
                'user_id' => 5
            ),
            array(
                'tran_amount' => '66666',
                'tran_from' => 'User 6',
                'tran_to' => 'User 7',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 6',
                'tran_info' => 'Transaction 6 information',
                'tran_uuid' => '66666',
                'tran_by' => '66666',
                'tran_for' => '66666',
                'user_id' => 6
            ),
            array(
                'tran_amount' => '77777',
                'tran_from' => 'User 7',
                'tran_to' => 'User 8',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 7',
                'tran_info' => 'Transaction 7 information',
                'tran_uuid' => '77777',
                'tran_by' => '77777',
                'tran_for' => '77777',
                'user_id' => 7
            ),
            array(
                'tran_amount' => '88888',
                'tran_from' => 'User 8',
                'tran_to' => 'User 9',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 8',
                'tran_info' => 'Transaction 8 information',
                'tran_uuid' => '88888',
                'tran_by' => '88888',
                'tran_for' => '88888',
                'user_id' => 8
            ),
            array(
                'tran_amount' => '99999',
                'tran_from' => 'User 9',
                'tran_to' => 'User 10',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 9',
                'tran_info' => 'Transaction 9 information',
                'tran_uuid' => '99999',
                'tran_by' => '99999',
                'tran_for' => '99999',
                'user_id' => 9
            ),
            array(
                'tran_amount' => '10101010',
                'tran_from' => 'User 10',
                'tran_to' => 'User 11',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 10',
                'tran_info' => 'Transaction 10 information',
                'tran_uuid' => '10101010',
                'tran_by' => '10101010',
                'tran_for' => '10101010',
                'user_id' => 10
            ),
            array(
                'tran_amount' => '11111111',
                'tran_from' => 'User 11',
                'tran_to' => 'User 12',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 11',
                'tran_info' => 'Transaction 11 information',
                'tran_uuid' => '11111111',
                'tran_by' => '11111111',
                'tran_for' => '11111111',
                'user_id' => 11
            ),
            array(
                'tran_amount' => '12121212',
                'tran_from' => 'User 12',
                'tran_to' => 'User 13',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 12',
                'tran_info' => 'Transaction 12 information',
                'tran_uuid' => '121212',
                'tran_by' => '121212',
                'tran_for' => '121212',
                'user_id' => 12
            ),
            array(
                'tran_amount' => '13131313',
                'tran_from' => 'User 13',
                'tran_to' => 'User 14',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 13',
                'tran_info' => 'Transaction 13 information',
                'tran_uuid' => '13131313',
                'tran_by' => '13131313',
                'tran_for' => '13131313',
                'user_id' => 13
            ),
            array(
                'tran_amount' => '14141414',
                'tran_from' => 'User 14',
                'tran_to' => 'User 15',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 14',
                'tran_info' => 'Transaction 14 information',
                'tran_uuid' => '14141414',
                'tran_by' => '14141414',
                'tran_for' => '14141414',
                'user_id' => 14
            ),
            array(
                'tran_amount' => '15151515',
                'tran_from' => 'User 15',
                'tran_to' => 'User 16',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 15',
                'tran_info' => 'Transaction 15 information',
                'tran_uuid' => '15151515',
                'tran_by' => '15151515',
                'tran_for' => '15151515',
                'user_id' => 15
            ),
            array(
                'tran_amount' => '16161616',
                'tran_from' => 'User 16',
                'tran_to' => 'User 17',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 16',
                'tran_info' => 'Transaction 16 information',
                'tran_uuid' => '16161616',
                'tran_by' => '16161616',
                'tran_for' => '16161616',
                'user_id' => 16
            ),
            array(
                'tran_amount' => '17171717',
                'tran_from' => 'User 17',
                'tran_to' => 'User 18',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 17',
                'tran_info' => 'Transaction 17 information',
                'tran_uuid' => '17171717',
                'tran_by' => '17171717',
                'tran_for' => '17171717',
                'user_id' => 17
            ),
            array(
                'tran_amount' => '18181818',
                'tran_from' => 'User 18',
                'tran_to' => 'User 19',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 18',
                'tran_info' => 'Transaction 18 information',
                'tran_uuid' => '18181818',
                'tran_by' => '18181818',
                'tran_for' => '18181818',
                'user_id' => 18
            ),
            array(
                'tran_amount' => '19191919',
                'tran_from' => 'User 19',
                'tran_to' => 'User 20',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Pending',
                'tran_type' => 'Type 19',
                'tran_info' => 'Transaction 19 information',
                'tran_uuid' => '19191919',
                'tran_by' => '19191919',
                'tran_for' => '19191919',
                'user_id' => 19
            ),
            array(
                'tran_amount' => '20202020',
                'tran_from' => 'User 20',
                'tran_to' => 'User 21',
                'tran_created' => date("Y-m-d H:i:s"),
                'tran_status' => 'Completed',
                'tran_type' => 'Type 20',
                'tran_info' => 'Transaction 20 information',
                'tran_uuid' => '20202020',
                'tran_by' => '20202020',
                'tran_for' => '20202020',
                'user_id' => 20
            )
        ));
    }
}
