<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\User;
use App\Models\Wallet;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;
     

    public function definition()
    {
        $order = Order::inRandomOrder()->first();
        $trader = Wallet::where('user_id', '!=', $order->user_id)
        ->where('crypto_id', '=', $order->crypto_id)
        ->inRandomOrder()
        ->first();

        if (!$trader) {
            $user = User::where('id', '!=', $order->user_id)->inRandomOrder()->first();

            $trader = Wallet::create([
                'user_id' => $user->id,
                'crypto_id' => $order->crypto_id, 
                'balance' => 0, 
            ]);
        }


        return [
            'order_id' => $order->id,
            'user_id' => $trader->user_id,
            'crypto_id' => $order->crypto_id,
            'amount' => $this->faker->randomFloat(8, 0.1, 5),
            'type' => $order->type === 'buy' ? 'sell' : 'buy',
            'status' => $this->faker->randomElement(['matched', 'pending', 'canceled']),
            'price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
