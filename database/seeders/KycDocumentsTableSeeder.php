<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KycDocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kyc_documents')->delete();
        
        \DB::table('kyc_documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'national_card_path' => 'lOQ1AJX-kkbNGwC-r8ytEyy-A6dZGbY-IT7Ektk-7nkGi.jpg',
                'selfie_path' => 'HSn2Mpl-ZUd9PpR-A66UhHr-sHdUGPq-qlWicXV-fwBUO.webp',
                'admin_note' => NULL,
                'status' => 'completed',
                'created_at' => '2025-07-18 23:01:12',
                'updated_at' => '2025-07-18 23:08:14',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'national_card_path' => 'YU4wC0f-BROBcYR-nAEACjn-PotRVRd-mORIzih-pahqD.jpg',
                'selfie_path' => 'b67Dd7M-Du8yJWv-EKHUYHE-cdVOCTK-IjKSopZ-XCoX5.webp',
                'admin_note' => NULL,
                'status' => 'completed',
                'created_at' => '2025-07-18 23:03:33',
                'updated_at' => '2025-07-18 23:08:38',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'national_card_path' => 'AQYq6ze-cXV93PW-YLcZ9Ja-Kwske6f-rinU6Ml-mC0Fh.jpg',
                'selfie_path' => 't7QggNJ-15cBxGy-LQQKRAQ-ToqtQt8-bcPK6Ea-FO8x1.webp',
                'admin_note' => NULL,
                'status' => 'completed',
                'created_at' => '2025-07-18 23:06:09',
                'updated_at' => '2025-07-18 23:08:19',
            ),
        ));
        
        
    }
}