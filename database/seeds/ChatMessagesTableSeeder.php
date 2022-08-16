<?php

use Illuminate\Database\Seeder;

class ChatMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_messages')->delete();
        
        \DB::table('chat_messages')->insert(array (
            0 => 
            array (
                'id' => 15,
                'msg' => 'Msg From Unify',
                'conversation_id' => 3,
                'created_at' => '2021-11-06 07:42:07',
                'updated_at' => '2021-11-06 07:42:07',
            ),
            1 => 
            array (
                'id' => 14,
                'msg' => 'Msg From Unify',
                'conversation_id' => 1,
                'created_at' => '2021-11-06 07:41:30',
                'updated_at' => '2021-11-06 07:41:30',
            ),
            2 => 
            array (
                'id' => 13,
                'msg' => 'Msg Send 1',
                'conversation_id' => 1,
                'created_at' => '2021-11-06 07:41:01',
                'updated_at' => '2021-11-06 07:41:01',
            ),
            3 => 
            array (
                'id' => 12,
                'msg' => 'Msg Send 1',
                'conversation_id' => 3,
                'created_at' => '2021-11-06 07:40:50',
                'updated_at' => '2021-11-06 07:40:50',
            ),
            4 => 
            array (
                'id' => 11,
                'msg' => 'Msg Send 1',
                'conversation_id' => 2,
                'created_at' => '2021-11-06 07:40:29',
                'updated_at' => '2021-11-06 07:40:29',
            ),
            5 => 
            array (
                'id' => 16,
                'msg' => 'Msg From Unify',
                'conversation_id' => 2,
                'created_at' => '2021-11-06 07:42:16',
                'updated_at' => '2021-11-06 07:42:16',
            ),
            6 => 
            array (
                'id' => 17,
                'msg' => 'Msg From Unify1',
                'conversation_id' => 4,
                'created_at' => '2021-11-06 07:42:58',
                'updated_at' => '2021-11-06 07:42:58',
            ),
            7 => 
            array (
                'id' => 18,
                'msg' => 'Msg From Unify1',
                'conversation_id' => 5,
                'created_at' => '2021-11-06 07:43:34',
                'updated_at' => '2021-11-06 07:43:34',
            ),
            8 => 
            array (
                'id' => 19,
                'msg' => 'Msg From Unify1',
                'conversation_id' => 1,
                'created_at' => '2021-11-06 07:43:41',
                'updated_at' => '2021-11-06 07:43:41',
            ),
            9 => 
            array (
                'id' => 20,
                'msg' => 'Msg From Unify2',
                'conversation_id' => 6,
                'created_at' => '2021-11-06 07:44:32',
                'updated_at' => '2021-11-06 07:44:32',
            ),
            10 => 
            array (
                'id' => 21,
                'msg' => 'Msg From Unify2',
                'conversation_id' => 5,
                'created_at' => '2021-11-06 07:44:38',
                'updated_at' => '2021-11-06 07:44:38',
            ),
            11 => 
            array (
                'id' => 22,
                'msg' => 'Msg From Unify2',
                'conversation_id' => 3,
                'created_at' => '2021-11-06 07:44:46',
                'updated_at' => '2021-11-06 07:44:46',
            ),
            12 => 
            array (
                'id' => 23,
                'msg' => 'Msg From Unify3',
                'conversation_id' => 6,
                'created_at' => '2021-11-06 07:45:19',
                'updated_at' => '2021-11-06 07:45:19',
            ),
            13 => 
            array (
                'id' => 24,
                'msg' => 'Msg From Unify3',
                'conversation_id' => 4,
                'created_at' => '2021-11-06 07:45:28',
                'updated_at' => '2021-11-06 07:45:28',
            ),
            14 => 
            array (
                'id' => 25,
                'msg' => 'Msg From Unify3',
                'conversation_id' => 2,
                'created_at' => '2021-11-06 07:45:34',
                'updated_at' => '2021-11-06 07:45:34',
            ),
        ));
        
        
    }
}