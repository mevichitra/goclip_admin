<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'video_id' => 48,
                'enabled' => 1,
                'user_id' => 7,
                'sound_id' => 3335,
                'title' => 'Testing Video 3',
                'description' => 'Testing Video 3 Description',
                'master_video' => '',
                'video' => '1636182292/4.mp4',
                'thumb' => '1636182292.jpg',
                'gif' => '1636182292.gif',
                'tags' => '',
                'location' => '',
                'duration' => 6,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:56',
                'updated_at' => '2021-11-06 07:04:56',
                'active' => 1,
                'flag' => 0,
                'privacy' => 0,
                'total_likes' => 0,
                'total_comments' => 3,
                'total_views' => 1,
                'total_report' => 0,
            ),
            1 => 
            array (
                'video_id' => 49,
                'enabled' => 1,
                'user_id' => 8,
                'sound_id' => 3336,
                'title' => 'Testing Video 4',
                'description' => 'Testing Video 1 Description',
                'master_video' => '',
                'video' => '1636182312/5.mp4',
                'thumb' => '1636182312.jpg',
                'gif' => '1636182312.gif',
                'tags' => '',
                'location' => '',
                'duration' => 6,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:05:16',
                'updated_at' => '2021-11-06 07:05:16',
                'active' => 1,
                'flag' => 0,
                'privacy' => 0,
                'total_likes' => 0,
                'total_comments' => 3,
                'total_views' => 1,
                'total_report' => 0,
            ),
            2 => 
            array (
                'video_id' => 47,
                'enabled' => 1,
                'user_id' => 6,
                'sound_id' => 3334,
                'title' => 'Testing Video 2',
                'description' => 'Testing Video 3 Description',
                'master_video' => '',
                'video' => '1636182269/3.mp4',
                'thumb' => '1636182269.jpg',
                'gif' => '1636182269.gif',
                'tags' => '',
                'location' => '',
                'duration' => 8,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:33',
                'updated_at' => '2021-11-06 07:04:33',
                'active' => 1,
                'flag' => 0,
                'privacy' => 0,
                'total_likes' => 0,
                'total_comments' => 3,
                'total_views' => 0,
                'total_report' => 0,
            ),
            3 => 
            array (
                'video_id' => 46,
                'enabled' => 1,
                'user_id' => 5,
                'sound_id' => 3333,
                'title' => 'Testing Video 1',
                'description' => 'Testing Video 1 Description',
                'master_video' => '',
                'video' => '1636182243/2.mp4',
                'thumb' => '1636182243.jpg',
                'gif' => '1636182243.gif',
                'tags' => '',
                'location' => '',
                'duration' => 12,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:11',
                'updated_at' => '2021-11-06 07:04:11',
                'active' => 1,
                'flag' => 0,
                'privacy' => 0,
                'total_likes' => 0,
                'total_comments' => 3,
                'total_views' => 1,
                'total_report' => 0,
            ),
        ));
        
        
    }
}