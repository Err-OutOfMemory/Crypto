<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fiat;

class FiatSeeder extends Seeder
{
    public function run(): void
    {
        $fiats = [['US Dollar','US'], ['Thai Baht' , 'THB']];


        foreach ($fiats as $fiat) {
            Fiat::create([
                'fiat_name' => $fiat[0],
                'symbol' => $fiat[1],
            ]);
        }
    }
}
