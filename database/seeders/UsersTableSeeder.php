<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مدیر کل',
                'mobile' => '09940682693',
                'email' => NULL,
                'password' => '$2y$12$h0w8mFZtX.gt0hubwtpDDeqivoCVTLwwrzguhyTByFx4EysYC8DxS',
                'is_admin' => '0',
                'remember_token' => 'nhcUDfjfcov7Szrf2fbs35N0E9xZSbY1GPhmsNX1syyhkhHJOvcTSode1Ghi',
                'created_at' => '2025-07-18 23:01:00',
                'updated_at' => '2025-07-18 23:01:00',
                'reset_code' => NULL,
                'reset_code_expires_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'کاربر عادی',
                'mobile' => '09028488061',
                'email' => NULL,
                'password' => '$2y$12$ta.OPLPR/uPD7wS4b4ZCA.WcZiHvWWF6LG1VB1Jm1pShAuHrYxL5S',
                'is_admin' => '0',
                'remember_token' => 'fFmf6VhL9ivj7PN7s13QtkQpmNSFe0VcYZiP5Jw5qHsqXNNkSkMUvUwitVBq',
                'created_at' => '2025-07-18 23:03:16',
                'updated_at' => '2025-07-18 23:03:16',
                'reset_code' => NULL,
                'reset_code_expires_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'پشتیبان',
                'mobile' => '09033761741',
                'email' => NULL,
                'password' => '$2y$12$Ul.rmkTJ3nEObzY/IxjVl.8WmlIbIt0YflxPlVkRx2t1okDK4O0vC',
                'is_admin' => '0',
                'remember_token' => 'Tn0YHLeDGZ7yhTPSdqfNmOPE8z3YuiCm4PhmFYIzIJYuEMxKh4zjU0d7XtXc',
                'created_at' => '2025-07-18 23:04:54',
                'updated_at' => '2025-07-18 23:04:54',
                'reset_code' => NULL,
                'reset_code_expires_at' => NULL,
            ),
        ));
        
        
    }
}