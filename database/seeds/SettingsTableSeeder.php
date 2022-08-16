<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'setting_id' => 1,
                'site_name' => 'Unify SoftTech',
                'site_address' => '<p>India</p>',
                'site_email' => 'support@unifysofttech.com',
                'site_phone' => '7878787878',
                'site_logo' => 'e2zgrwhw3ggjv7VabSrNTDKmjofIUneXCrtq1LjX.png',
                'watermark' => 'CMbBiDnTlqi1tKuMNe44wOTxSNEhYPNgUWciN3Bf.png',
                'cur_version' => 'v3.2',
                'updated_at' => '2021-11-02 12:19:38',
                'migrated' => 0,
            ),
        ));
        
        
    }
}