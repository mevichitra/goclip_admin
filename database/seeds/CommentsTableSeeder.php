<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'comment_id' => 1,
                'video_id' => 48,
                'user_id' => 5,
                'added_on' => '2021-11-06 07:54:13',
                'updated_on' => '2021-11-06 07:54:13',
                'comment' => 'Comment From Unify',
                'active' => 1,
            ),
            1 => 
            array (
                'comment_id' => 2,
                'video_id' => 47,
                'user_id' => 5,
                'added_on' => '2021-11-06 07:54:18',
                'updated_on' => '2021-11-06 07:54:18',
                'comment' => 'Comment From Unify',
                'active' => 1,
            ),
            2 => 
            array (
                'comment_id' => 3,
                'video_id' => 49,
                'user_id' => 5,
                'added_on' => '2021-11-06 07:54:25',
                'updated_on' => '2021-11-06 07:54:25',
                'comment' => 'Comment From Unify',
                'active' => 1,
            ),
            3 => 
            array (
                'comment_id' => 4,
                'video_id' => 46,
                'user_id' => 6,
                'added_on' => '2021-11-06 07:54:49',
                'updated_on' => '2021-11-06 07:54:49',
                'comment' => 'Comment From Unify1',
                'active' => 1,
            ),
            4 => 
            array (
                'comment_id' => 5,
                'video_id' => 48,
                'user_id' => 6,
                'added_on' => '2021-11-06 07:54:54',
                'updated_on' => '2021-11-06 07:54:54',
                'comment' => 'Comment From Unify1',
                'active' => 1,
            ),
            5 => 
            array (
                'comment_id' => 6,
                'video_id' => 49,
                'user_id' => 6,
                'added_on' => '2021-11-06 07:55:02',
                'updated_on' => '2021-11-06 07:55:02',
                'comment' => 'Comment From Unify1',
                'active' => 1,
            ),
            6 => 
            array (
                'comment_id' => 7,
                'video_id' => 49,
                'user_id' => 7,
                'added_on' => '2021-11-06 07:55:34',
                'updated_on' => '2021-11-06 07:55:34',
                'comment' => 'Comment From Unify2',
                'active' => 1,
            ),
            7 => 
            array (
                'comment_id' => 8,
                'video_id' => 47,
                'user_id' => 7,
                'added_on' => '2021-11-06 07:55:39',
                'updated_on' => '2021-11-06 07:55:39',
                'comment' => 'Comment From Unify2',
                'active' => 1,
            ),
            8 => 
            array (
                'comment_id' => 9,
                'video_id' => 46,
                'user_id' => 7,
                'added_on' => '2021-11-06 07:55:45',
                'updated_on' => '2021-11-06 07:55:45',
                'comment' => 'Comment From Unify2',
                'active' => 1,
            ),
            9 => 
            array (
                'comment_id' => 10,
                'video_id' => 46,
                'user_id' => 8,
                'added_on' => '2021-11-06 07:56:12',
                'updated_on' => '2021-11-06 07:56:12',
                'comment' => 'Comment From Unify3',
                'active' => 1,
            ),
            10 => 
            array (
                'comment_id' => 11,
                'video_id' => 47,
                'user_id' => 8,
                'added_on' => '2021-11-06 07:56:18',
                'updated_on' => '2021-11-06 07:56:18',
                'comment' => 'Comment From Unify3',
                'active' => 1,
            ),
            11 => 
            array (
                'comment_id' => 12,
                'video_id' => 48,
                'user_id' => 8,
                'added_on' => '2021-11-06 07:56:25',
                'updated_on' => '2021-11-06 07:56:25',
                'comment' => 'Comment From Unify3',
                'active' => 1,
            ),
        ));
        
        
    }
}