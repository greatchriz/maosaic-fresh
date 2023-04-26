<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_methods = [
            [
                'name' => 'Credit Card',
                'image' => '/images/credit-card-logo.jpg',

            ],
            [
                'name' => 'Crypto Currency',
                'image' => '/images/tether.png',
            ],

        ];

        foreach ($payment_methods as $payment_method) {
            \App\Models\PaymentMethod::create($payment_method);
        }
    }
}
