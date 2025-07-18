<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'پشتیبانی فنی',
                'created_at' => '2025-07-18 23:08:52',
                'updated_at' => '2025-07-18 23:08:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'پشتیبانی مالی',
                'created_at' => '2025-07-18 23:09:00',
                'updated_at' => '2025-07-18 23:09:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ارسال گزارش',
                'created_at' => '2025-07-18 23:09:10',
                'updated_at' => '2025-07-18 23:09:10',
            ),
        ));
        
        
    }
}