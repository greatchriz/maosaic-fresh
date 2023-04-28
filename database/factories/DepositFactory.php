<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deposit>
 */
class DepositFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return rand(1, 2);
            },
            'user_wallet_address' => $this->faker->uuid,
            'transaction_hash' => $this->faker->uuid,
            'amount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
