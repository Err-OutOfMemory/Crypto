<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cryptocurrency;

class CryptocurrencySeeder extends Seeder
{

    public function run(): void
    {
        $cryptos = [['Bitcoin','BTC'], ['Ethereum' , 'ETH'], ['Ripple','XRP'], ['Dogecoin','DOGE']];


        foreach ($cryptos as $crypto) {
            Cryptocurrency::create([
                'crypto_name' => $crypto[0],
                'symbol' => $crypto[1],
            ]);
        }
    }
}
