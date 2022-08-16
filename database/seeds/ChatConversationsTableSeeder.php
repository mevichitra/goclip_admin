<?php

use Illuminate\Database\Seeder;

class ChatConversationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_conversations')->delete();
        
        \DB::table('chat_conversations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_from' => 6,
                'user_to' => 5,
                'created_at' => '2021-11-06 06:34:21',
                'updated_at' => '2021-11-06 06:34:21',
            ),
            1 => 
            array (
                'id' => 2,
                'user_from' => 5,
                'user_to' => 8,
                'created_at' => '2021-11-06 07:40:10',
                'updated_at' => '2021-11-06 07:40:10',
            ),
            2 => 
            array (
                'id' => 3,
                'user_from' => 5,
                'user_to' => 7,
                'created_at' => '2021-11-06 07:40:33',
                'updated_at' => '2021-11-06 07:40:33',
            ),
            3 => 
            array (
                'id' => 4,
                'user_from' => 6,
                'user_to' => 8,
                'created_at' => '2021-11-06 07:42:42',
                'updated_at' => '2021-11-06 07:42:42',
            ),
            4 => 
            array (
                'id' => 5,
                'user_from' => 6,
                'user_to' => 7,
                'created_at' => '2021-11-06 07:43:02',
                'updated_at' => '2021-11-06 07:43:02',
            ),
            5 => 
            array (
                'id' => 6,
                'user_from' => 7,
                'user_to' => 8,
                'created_at' => '2021-11-06 07:44:23',
                'updated_at' => '2021-11-06 07:44:23',
            ),
        ));
        
        
    }
}