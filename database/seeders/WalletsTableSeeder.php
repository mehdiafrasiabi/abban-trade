<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallets')->delete();
        
        \DB::table('wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'balance' => '0.0000',
                'created_at' => '2025-07-18 23:01:00',
                'updated_at' => '2025-07-18 23:01:00',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'balance' => '0.0000',
                'created_at' => '2025-07-18 23:03:16',
                'updated_at' => '2025-07-18 23:03:16',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'balance' => '0.0000',
                'created_at' => '2025-07-18 23:04:54',
                'updated_at' => '2025-07-18 23:04:54',
            ),
        ));
        
        
    }
}