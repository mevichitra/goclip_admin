<?php

use Illuminate\Database\Seeder;

class AppLoginPageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_login_page')->delete();
        
        \DB::table('app_login_page')->insert(array (
            0 => 
            array (
                'app_login_page_id' => 1,
                'logo' => 'DMz6X6BRwDHB0PluBGy1ZPS6Tb7055GZbLrDhLW3.png',
                'title' => 'Sign Up For Leuke',
                'description' => '<p>Create New Account</p>',
                'fb_login' => 0,
                'google_login' => 0,
                'privacy_policy' => '<p>By Signing in your agree with Leuke Terms of Service use and Privacy Policy</p>',
                'apple_login' => 0,
                'background_img' => 'spz5Bem14X8eMI6B1HDIjn1LzbBcgTNi5EOyqXcb.png',
            ),
        ));
        
        
    }
}