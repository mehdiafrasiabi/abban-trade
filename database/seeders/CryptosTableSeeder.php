<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CryptosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cryptos')->delete();
        
        \DB::table('cryptos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'coingecko_id' => 'bitcoin',
                'symbol' => 'btc',
                'name_en' => 'Bitcoin',
                'name_fa' => 'بیت کوین',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/1/thumb/bitcoin.png?1696501400',
                'created_at' => '2025-06-07 16:18:48',
                'updated_at' => '2025-06-07 16:18:48',
            ),
            1 => 
            array (
                'id' => 2,
                'coingecko_id' => 'solana',
                'symbol' => 'sol',
                'name_en' => 'Solana',
                'name_fa' => 'سولانا',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/4128/thumb/solana.png?1718769756',
                'created_at' => '2025-06-07 16:18:56',
                'updated_at' => '2025-06-07 16:18:56',
            ),
            2 => 
            array (
                'id' => 3,
                'coingecko_id' => 'ethereum',
                'symbol' => 'eth',
                'name_en' => 'Ethereum',
                'name_fa' => 'اتریوم',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/279/thumb/ethereum.png?1696501628',
                'created_at' => '2025-06-07 16:20:41',
                'updated_at' => '2025-06-07 16:20:41',
            ),
            3 => 
            array (
                'id' => 4,
                'coingecko_id' => 'tether',
                'symbol' => 'usdt',
                'name_en' => 'Tether',
                'name_fa' => 'تتر',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/325/thumb/Tether.png?1696501661',
                'created_at' => '2025-06-07 16:26:36',
                'updated_at' => '2025-06-07 16:26:36',
            ),
            4 => 
            array (
                'id' => 5,
                'coingecko_id' => 'dogecoin',
                'symbol' => 'doge',
                'name_en' => 'Dogecoin',
                'name_fa' => 'دوج کوین',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/5/thumb/dogecoin.png?1696501409',
                'created_at' => '2025-06-07 18:17:18',
                'updated_at' => '2025-06-07 18:17:18',
            ),
            5 => 
            array (
                'id' => 6,
                'coingecko_id' => 'cardano',
                'symbol' => 'ada',
                'name_en' => 'Cardano',
                'name_fa' => 'کارادونا',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/975/thumb/cardano.png?1696502090',
                'created_at' => '2025-06-07 18:18:07',
                'updated_at' => '2025-06-07 18:18:07',
            ),
            6 => 
            array (
                'id' => 7,
                'coingecko_id' => 'tron',
                'symbol' => 'trx',
                'name_en' => 'TRON',
                'name_fa' => 'ترون',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/1094/thumb/tron-logo.png?1696502193',
                'created_at' => '2025-06-07 18:18:28',
                'updated_at' => '2025-06-07 18:18:28',
            ),
            7 => 
            array (
                'id' => 8,
                'coingecko_id' => 'uniswap',
                'symbol' => 'uni',
                'name_en' => 'Uniswap',
                'name_fa' => 'یونی سوآپ',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/12504/thumb/uniswap-logo.png?1720676669',
                'created_at' => '2025-06-07 18:21:57',
                'updated_at' => '2025-06-07 18:21:57',
            ),
            8 => 
            array (
                'id' => 9,
                'coingecko_id' => 'litecoin',
                'symbol' => 'ltc',
                'name_en' => 'Litecoin',
                'name_fa' => 'لایت کوین',
                'image_url' => 'https://coin-images.coingecko.com/coins/images/2/thumb/litecoin.png?1696501400',
                'created_at' => '2025-06-07 18:22:18',
                'updated_at' => '2025-06-07 18:22:18',
            ),
        ));
        
        
    }
}