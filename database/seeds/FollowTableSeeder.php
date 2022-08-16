<?php

use Illuminate\Database\Seeder;

class FollowTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('follow')->delete();
        
        \DB::table('follow')->insert(array (
            0 => 
            array (
                'follow_id' => 1,
                'follow_by' => 5,
                'follow_to' => 8,
                'follow_on' => '2021-11-06 06:21:14',
            ),
            1 => 
            array (
                'follow_id' => 2,
                'follow_by' => 5,
                'follow_to' => 7,
                'follow_on' => '2021-11-06 06:21:17',
            ),
            2 => 
            array (
                'follow_id' => 3,
                'follow_by' => 5,
                'follow_to' => 6,
                'follow_on' => '2021-11-06 06:21:18',
            ),
            3 => 
            array (
                'follow_id' => 4,
                'follow_by' => 6,
                'follow_to' => 8,
                'follow_on' => '2021-11-06 06:34:12',
            ),
            4 => 
            array (
                'follow_id' => 5,
                'follow_by' => 6,
                'follow_to' => 7,
                'follow_on' => '2021-11-06 06:34:13',
            ),
            5 => 
            array (
                'follow_id' => 6,
                'follow_by' => 6,
                'follow_to' => 5,
                'follow_on' => '2021-11-06 06:34:14',
            ),
            6 => 
            array (
                'follow_id' => 7,
                'follow_by' => 7,
                'follow_to' => 8,
                'follow_on' => '2021-11-06 07:39:21',
            ),
            7 => 
            array (
                'follow_id' => 8,
                'follow_by' => 7,
                'follow_to' => 6,
                'follow_on' => '2021-11-06 07:39:23',
            ),
            8 => 
            array (
                'follow_id' => 9,
                'follow_by' => 7,
                'follow_to' => 5,
                'follow_on' => '2021-11-06 07:39:24',
            ),
            9 => 
            array (
                'follow_id' => 10,
                'follow_by' => 8,
                'follow_to' => 7,
                'follow_on' => '2021-11-06 07:39:47',
            ),
            10 => 
            array (
                'follow_id' => 11,
                'follow_by' => 8,
                'follow_to' => 6,
                'follow_on' => '2021-11-06 07:39:48',
            ),
            11 => 
            array (
                'follow_id' => 12,
                'follow_by' => 8,
                'follow_to' => 5,
                'follow_on' => '2021-11-06 07:39:50',
            ),
        ));
        
        
    }
}