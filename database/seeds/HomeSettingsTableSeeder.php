<?php

use Illuminate\Database\Seeder;

class HomeSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('home_settings')->delete();

        \DB::table('home_settings')->insert(array(
            0 => array(
                'home_setting_id' => 1,
                'heading' => 'Set The World On Fire With Your',
                'sub_heading' => 'Unique Talent',
                'img1' => 'FGRsm3VILxE6oJfkmbwOemJeBWJwLJuqir114EUa.png',
                'img2' => 'EKSUMyv2aAzkNRVhq1zuH7WrUdYSPT0BWXypdDgr.png',
                'img1_link' => '#',
                'img2_link' => '#',
                'comments_per_page' => 10,
                'logo' => '5luDNbhXMmFC2iSsyiMJC6Lkj6cfDLXXE09lJbt5.png',
                'site_title' => 'Leuke V3.4',
                'white_logo' => 'xMVXAcZfdqubciHvgSP2eHgW4le7gMUfibhQHC1l.png',
                'main_color' => '<p>background: linear-gradient(left , rgb(115, 80, 199) 7% , rgb(236, 74, 99) 86%); background: -o-linear-gradient(left , rgb(115, 80, 199) 7% , rgb(236, 74, 99) 86%); background: -ms-linear-gradient(left , rgb(115, 80, 199) 7% , rgb(236, 74, 99) 86%); background: -moz-linear-gradient(left , rgb(115, 80, 199) 7% , rgb(236, 74, 99) 86%); background: -webkit-linear-gradient(left , rgb(115, 80, 199) 7% , rgb(236, 74, 99) 86%);</p>',
                'videos_per_page' => 12,
                'home_top_background_img' => 'IRR9lvENw8ZUqKpCNgrvlAm3ieAAE7tgUCRaBwlC.jpg',
            ),
        ));

    }
}
