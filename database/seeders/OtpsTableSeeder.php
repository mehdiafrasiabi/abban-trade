<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OtpsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('otps')->delete();
        
        \DB::table('otps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mobile' => '09940682693',
                'code' => '671636',
                'expires_at' => '2025-07-19 03:30:57',
                'is_used' => 1,
                'created_at' => '2025-07-18 23:00:40',
                'updated_at' => '2025-07-18 23:00:57',
            ),
            1 => 
            array (
                'id' => 2,
                'mobile' => '09028488061',
                'code' => '604940',
                'expires_at' => '2025-07-19 03:33:12',
                'is_used' => 1,
                'created_at' => '2025-07-18 23:02:21',
                'updated_at' => '2025-07-18 23:03:12',
            ),
            2 => 
            array (
                'id' => 3,
                'mobile' => '09033761741',
                'code' => '975764',
                'expires_at' => '2025-07-19 03:34:43',
                'is_used' => 1,
                'created_at' => '2025-07-18 23:04:29',
                'updated_at' => '2025-07-18 23:04:43',
            ),
        ));
        
        
    }
}