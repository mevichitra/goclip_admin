<?php

use Illuminate\Database\Seeder;

class SoundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sounds')->delete();
        
        \DB::table('sounds')->insert(array (
            0 => 
            array (
                'sound_id' => 3324,
                'title' => 'I Love You',
                'sound_name' => '1635852543.mp3',
                'user_id' => 0,
                'cat_id' => '2',
                'parent_id' => 0,
                'duration' => 32,
                'album' => 'BodyGuard',
                'artist' => 'Salman Khan',
                'tags' => NULL,
                'used_times' => 0,
                'deleted' => 0,
                'created_at' => '2021-11-02 11:29:05',
                'active' => 1,
                'image' => 'I1720qU9OXsygJRa3PI6SvgpMKrqhXxqOdqCGBHu.jpg',
            ),
            1 => 
            array (
                'sound_id' => 3325,
                'title' => 'Body Guard',
                'sound_name' => '1635852599.mp3',
                'user_id' => 0,
                'cat_id' => '2',
                'parent_id' => 0,
                'duration' => 32,
                'album' => 'BodyGuard',
                'artist' => 'Salman Khan',
                'tags' => NULL,
                'used_times' => 0,
                'deleted' => 0,
                'created_at' => '2021-11-02 11:29:59',
                'active' => 1,
                'image' => '6cam3VTo3bkxKNnasDRFHV9pFopYLoerwAz0BqUs.jpg',
            ),
            2 => 
            array (
                'sound_id' => 3326,
                'title' => 'Can We Kiss Forever',
                'sound_name' => '1635855090.mp3',
                'user_id' => 0,
                'cat_id' => '4',
                'parent_id' => 0,
                'duration' => 25,
                'album' => 'Can We Kiss Forever',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 0,
                'deleted' => 0,
                'created_at' => '2021-11-02 12:11:31',
                'active' => 1,
                'image' => 'j4OFdraKBN5IXhXptrarNOV56DcPtXq75sS0hV46.jpg',
            ),
            3 => 
            array (
                'sound_id' => 3327,
                'title' => 'Gandhiji Jab Tak Deewar Par The',
                'sound_name' => '1635855140.mp3',
                'user_id' => 0,
                'cat_id' => '5',
                'parent_id' => 0,
                'duration' => 34,
                'album' => 'Ab Tak Chhappan 2',
                'artist' => 'Nana Patekar',
                'tags' => NULL,
                'used_times' => 0,
                'deleted' => 0,
                'created_at' => '2021-11-02 12:12:21',
                'active' => 1,
                'image' => 'SpsyDRfWeLTAqbmAmZEqjDezl91Tqf1Cox1pXTqu.jpg',
            ),
            4 => 
            array (
                'sound_id' => 3328,
                'title' => 'Baaz Ki Nazar Aur Bajirao Ki Talvar',
                'sound_name' => '1635855193.mp3',
                'user_id' => 0,
                'cat_id' => '5',
                'parent_id' => 0,
                'duration' => 8,
                'album' => 'Bajirao Mastani',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 0,
                'deleted' => 0,
                'created_at' => '2021-11-02 12:13:14',
                'active' => 1,
                'image' => 'c1Yoy32cNtJ0Va9bdmAjqErnDK6jhBddOnu7aFlK.jpg',
            ),
            5 => 
            array (
                'sound_id' => 3336,
                'title' => '1636182312.mp3',
                'sound_name' => '1636182312.mp3',
                'user_id' => 8,
                'cat_id' => '0',
                'parent_id' => 0,
                'duration' => 6,
                'album' => '',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 1,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:05:16',
                'active' => 1,
                'image' => '',
            ),
            6 => 
            array (
                'sound_id' => 3335,
                'title' => '1636182292.mp3',
                'sound_name' => '1636182292.mp3',
                'user_id' => 7,
                'cat_id' => '0',
                'parent_id' => 0,
                'duration' => 6,
                'album' => '',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 1,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:56',
                'active' => 1,
                'image' => '',
            ),
            7 => 
            array (
                'sound_id' => 3334,
                'title' => '1636182269.mp3',
                'sound_name' => '1636182269.mp3',
                'user_id' => 6,
                'cat_id' => '0',
                'parent_id' => 0,
                'duration' => 8,
                'album' => '',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 1,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:33',
                'active' => 1,
                'image' => '',
            ),
            8 => 
            array (
                'sound_id' => 3333,
                'title' => '1636182243.mp3',
                'sound_name' => '1636182243.mp3',
                'user_id' => 5,
                'cat_id' => '0',
                'parent_id' => 0,
                'duration' => 12,
                'album' => '',
                'artist' => '',
                'tags' => NULL,
                'used_times' => 1,
                'deleted' => 0,
                'created_at' => '2021-11-06 07:04:11',
                'active' => 1,
                'image' => '',
            ),
        ));
        
        
    }
}