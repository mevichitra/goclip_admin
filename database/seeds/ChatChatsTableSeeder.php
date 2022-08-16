<?php

use Illuminate\Database\Seeder;

class ChatChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_chats')->delete();
        
        \DB::table('chat_chats')->insert(array (
            0 => 
            array (
                'id' => 30,
                'message_id' => 15,
                'conversation_id' => 3,
                'user_id' => 7,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:42:07',
                'updated_at' => '2021-11-06 07:42:07',
            ),
            1 => 
            array (
                'id' => 40,
                'message_id' => 20,
                'conversation_id' => 6,
                'user_id' => 8,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:44:32',
                'updated_at' => '2021-11-06 07:44:32',
            ),
            2 => 
            array (
                'id' => 39,
                'message_id' => 20,
                'conversation_id' => 6,
                'user_id' => 7,
                'type' => 0,
                'read_at' => '2021-11-06 07:45:14',
                'created_at' => '2021-11-06 07:44:32',
                'updated_at' => '2021-11-06 07:45:14',
            ),
            3 => 
            array (
                'id' => 29,
                'message_id' => 15,
                'conversation_id' => 3,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:44:41',
                'created_at' => '2021-11-06 07:42:07',
                'updated_at' => '2021-11-06 07:44:41',
            ),
            4 => 
            array (
                'id' => 28,
                'message_id' => 14,
                'conversation_id' => 1,
                'user_id' => 6,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:41:30',
                'updated_at' => '2021-11-06 07:41:30',
            ),
            5 => 
            array (
                'id' => 38,
                'message_id' => 19,
                'conversation_id' => 1,
                'user_id' => 5,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:43:41',
                'updated_at' => '2021-11-06 07:43:41',
            ),
            6 => 
            array (
                'id' => 37,
                'message_id' => 19,
                'conversation_id' => 1,
                'user_id' => 6,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:43:41',
                'updated_at' => '2021-11-06 07:43:41',
            ),
            7 => 
            array (
                'id' => 27,
                'message_id' => 14,
                'conversation_id' => 1,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:43:39',
                'created_at' => '2021-11-06 07:41:30',
                'updated_at' => '2021-11-06 07:43:39',
            ),
            8 => 
            array (
                'id' => 36,
                'message_id' => 18,
                'conversation_id' => 5,
                'user_id' => 7,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:43:34',
                'updated_at' => '2021-11-06 07:43:34',
            ),
            9 => 
            array (
                'id' => 26,
                'message_id' => 13,
                'conversation_id' => 1,
                'user_id' => 6,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:41:01',
                'updated_at' => '2021-11-06 07:41:01',
            ),
            10 => 
            array (
                'id' => 25,
                'message_id' => 13,
                'conversation_id' => 1,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:43:39',
                'created_at' => '2021-11-06 07:41:01',
                'updated_at' => '2021-11-06 07:43:39',
            ),
            11 => 
            array (
                'id' => 35,
                'message_id' => 18,
                'conversation_id' => 5,
                'user_id' => 6,
                'type' => 0,
                'read_at' => '2021-11-06 07:44:36',
                'created_at' => '2021-11-06 07:43:34',
                'updated_at' => '2021-11-06 07:44:36',
            ),
            12 => 
            array (
                'id' => 34,
                'message_id' => 17,
                'conversation_id' => 4,
                'user_id' => 8,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:42:58',
                'updated_at' => '2021-11-06 07:42:58',
            ),
            13 => 
            array (
                'id' => 24,
                'message_id' => 12,
                'conversation_id' => 3,
                'user_id' => 7,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:40:50',
                'updated_at' => '2021-11-06 07:40:50',
            ),
            14 => 
            array (
                'id' => 33,
                'message_id' => 17,
                'conversation_id' => 4,
                'user_id' => 6,
                'type' => 0,
                'read_at' => '2021-11-06 07:45:20',
                'created_at' => '2021-11-06 07:42:58',
                'updated_at' => '2021-11-06 07:45:20',
            ),
            15 => 
            array (
                'id' => 23,
                'message_id' => 12,
                'conversation_id' => 3,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:44:42',
                'created_at' => '2021-11-06 07:40:50',
                'updated_at' => '2021-11-06 07:44:42',
            ),
            16 => 
            array (
                'id' => 22,
                'message_id' => 11,
                'conversation_id' => 2,
                'user_id' => 8,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:40:30',
                'updated_at' => '2021-11-06 07:40:30',
            ),
            17 => 
            array (
                'id' => 32,
                'message_id' => 16,
                'conversation_id' => 2,
                'user_id' => 8,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:42:16',
                'updated_at' => '2021-11-06 07:42:16',
            ),
            18 => 
            array (
                'id' => 31,
                'message_id' => 16,
                'conversation_id' => 2,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:45:29',
                'created_at' => '2021-11-06 07:42:16',
                'updated_at' => '2021-11-06 07:45:29',
            ),
            19 => 
            array (
                'id' => 21,
                'message_id' => 11,
                'conversation_id' => 2,
                'user_id' => 5,
                'type' => 0,
                'read_at' => '2021-11-06 07:45:30',
                'created_at' => '2021-11-06 07:40:29',
                'updated_at' => '2021-11-06 07:45:30',
            ),
            20 => 
            array (
                'id' => 41,
                'message_id' => 21,
                'conversation_id' => 5,
                'user_id' => 7,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:44:38',
                'updated_at' => '2021-11-06 07:44:38',
            ),
            21 => 
            array (
                'id' => 42,
                'message_id' => 21,
                'conversation_id' => 5,
                'user_id' => 6,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:44:38',
                'updated_at' => '2021-11-06 07:44:38',
            ),
            22 => 
            array (
                'id' => 43,
                'message_id' => 22,
                'conversation_id' => 3,
                'user_id' => 7,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:44:46',
                'updated_at' => '2021-11-06 07:44:46',
            ),
            23 => 
            array (
                'id' => 44,
                'message_id' => 22,
                'conversation_id' => 3,
                'user_id' => 5,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:44:46',
                'updated_at' => '2021-11-06 07:44:46',
            ),
            24 => 
            array (
                'id' => 45,
                'message_id' => 23,
                'conversation_id' => 6,
                'user_id' => 8,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:19',
                'updated_at' => '2021-11-06 07:45:19',
            ),
            25 => 
            array (
                'id' => 46,
                'message_id' => 23,
                'conversation_id' => 6,
                'user_id' => 7,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:19',
                'updated_at' => '2021-11-06 07:45:19',
            ),
            26 => 
            array (
                'id' => 47,
                'message_id' => 24,
                'conversation_id' => 4,
                'user_id' => 8,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:28',
                'updated_at' => '2021-11-06 07:45:28',
            ),
            27 => 
            array (
                'id' => 48,
                'message_id' => 24,
                'conversation_id' => 4,
                'user_id' => 6,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:28',
                'updated_at' => '2021-11-06 07:45:28',
            ),
            28 => 
            array (
                'id' => 49,
                'message_id' => 25,
                'conversation_id' => 2,
                'user_id' => 8,
                'type' => 0,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:34',
                'updated_at' => '2021-11-06 07:45:34',
            ),
            29 => 
            array (
                'id' => 50,
                'message_id' => 25,
                'conversation_id' => 2,
                'user_id' => 5,
                'type' => 1,
                'read_at' => NULL,
                'created_at' => '2021-11-06 07:45:34',
                'updated_at' => '2021-11-06 07:45:34',
            ),
        ));
        
        
    }
}