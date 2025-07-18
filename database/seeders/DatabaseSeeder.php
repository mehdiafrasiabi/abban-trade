<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CryptosTableSeeder::class,
            DepartmentsTableSeeder::class,
            UsersTableSeeder::class,
            OtpsTableSeeder::class,
            KycDocumentsTableSeeder::class,
            WalletsTableSeeder::class,
        ]);
    }
}
