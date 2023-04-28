<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import card from App\Models\Card;

class CryptoWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = [
            [
                'wallet_address' => '0x1234567890123456789012345678901234567890',
                'user_id' => 1,
            ],
            [
                'wallet_address' => '0x1234567890123456789012345678901234567880',
                'user_id' => 2,
            ],
        ];

        foreach ($wallets as $wallet) {
            \App\Models\PaymentMethod::create([
                'name' => 'Crypto Wallet',
                'image' => 'https://via.placeholder.com/150',
                'user_id' => $wallet['user_id'],
                'paymentable_id' => \App\Models\CryptoWallet::create([
                    'wallet_address' => $wallet['wallet_address'],

                ])->id,
                'paymentable_type' => \App\Models\CryptoWallet::class,
            ]);
        }
    }
}
