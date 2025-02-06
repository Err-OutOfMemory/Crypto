<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cryptocurrency;
use App\Models\Wallet;
use App\Models\User;

class WalletFactory extends Factory
{
    protected $model = Wallet::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $crypto = Cryptocurrency::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'crypto_id' => $crypto->id,
            'balance' => $this->faker->randomFloat(8, 0.1, 5),
        ];
    }
}
