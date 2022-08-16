<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'notify_id' => 1,
                'notify_by' => 5,
                'notify_to' => 8,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 1,
                'added_on' => '2021-11-06 06:21:14',
            ),
            1 => 
            array (
                'notify_id' => 2,
                'notify_by' => 5,
                'notify_to' => 7,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 06:21:17',
            ),
            2 => 
            array (
                'notify_id' => 3,
                'notify_by' => 5,
                'notify_to' => 6,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 06:21:18',
            ),
            3 => 
            array (
                'notify_id' => 4,
                'notify_by' => 6,
                'notify_to' => 8,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 06:34:12',
            ),
            4 => 
            array (
                'notify_id' => 5,
                'notify_by' => 6,
                'notify_to' => 7,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 06:34:13',
            ),
            5 => 
            array (
                'notify_id' => 6,
                'notify_by' => 6,
                'notify_to' => 5,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 06:34:14',
            ),
            6 => 
            array (
                'notify_id' => 7,
                'notify_by' => 7,
                'notify_to' => 8,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:21',
            ),
            7 => 
            array (
                'notify_id' => 8,
                'notify_by' => 7,
                'notify_to' => 6,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:23',
            ),
            8 => 
            array (
                'notify_id' => 9,
                'notify_by' => 7,
                'notify_to' => 5,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:24',
            ),
            9 => 
            array (
                'notify_id' => 10,
                'notify_by' => 8,
                'notify_to' => 7,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:47',
            ),
            10 => 
            array (
                'notify_id' => 11,
                'notify_by' => 8,
                'notify_to' => 6,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:48',
            ),
            11 => 
            array (
                'notify_id' => 12,
                'notify_by' => 8,
                'notify_to' => 5,
                'video_id' => 0,
                'message' => 'Follow you.',
                'type' => 'F',
                'read' => 0,
                'added_on' => '2021-11-06 07:39:50',
            ),
            12 => 
            array (
                'notify_id' => 13,
                'notify_by' => 5,
                'notify_to' => 7,
                'video_id' => 48,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:54:13',
            ),
            13 => 
            array (
                'notify_id' => 14,
                'notify_by' => 5,
                'notify_to' => 6,
                'video_id' => 47,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:54:18',
            ),
            14 => 
            array (
                'notify_id' => 15,
                'notify_by' => 5,
                'notify_to' => 8,
                'video_id' => 49,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:54:25',
            ),
            15 => 
            array (
                'notify_id' => 16,
                'notify_by' => 6,
                'notify_to' => 5,
                'video_id' => 46,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:54:49',
            ),
            16 => 
            array (
                'notify_id' => 17,
                'notify_by' => 6,
                'notify_to' => 7,
                'video_id' => 48,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:54:54',
            ),
            17 => 
            array (
                'notify_id' => 18,
                'notify_by' => 6,
                'notify_to' => 8,
                'video_id' => 49,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:55:02',
            ),
            18 => 
            array (
                'notify_id' => 19,
                'notify_by' => 7,
                'notify_to' => 8,
                'video_id' => 49,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:55:34',
            ),
            19 => 
            array (
                'notify_id' => 20,
                'notify_by' => 7,
                'notify_to' => 6,
                'video_id' => 47,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:55:39',
            ),
            20 => 
            array (
                'notify_id' => 21,
                'notify_by' => 7,
                'notify_to' => 5,
                'video_id' => 46,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:55:45',
            ),
            21 => 
            array (
                'notify_id' => 22,
                'notify_by' => 8,
                'notify_to' => 5,
                'video_id' => 46,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:56:12',
            ),
            22 => 
            array (
                'notify_id' => 23,
                'notify_by' => 8,
                'notify_to' => 6,
                'video_id' => 47,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:56:18',
            ),
            23 => 
            array (
                'notify_id' => 24,
                'notify_by' => 8,
                'notify_to' => 7,
                'video_id' => 48,
                'message' => 'Comment on your video',
                'type' => 'VC',
                'read' => 0,
                'added_on' => '2021-11-06 07:56:25',
            ),
        ));
        
        
    }
}