<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Wallet;


class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $wallet = Wallet::inRandomOrder()->first();

        return [
            'user_id' => $wallet->user_id,
            'crypto_id' => $wallet->crypto_id,
            'type' => $this->faker->randomElement(['buy', 'sell']),
            'amount' => $this->faker->randomFloat(8, 0.1, 10),
            'price' => $this->faker->randomFloat(2, 10000, 50000),
        ];
    }
}
