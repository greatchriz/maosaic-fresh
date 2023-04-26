<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deposit;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'payment_method_id' => 1,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 2,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 1,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 2,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 1,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 2,
                'user_id' => 1,

                'amount' => 100000,

            ],
            [
                'payment_method_id' => 1,
                'user_id' => 1,

                'amount' => 100000,

            ],
        ];

        foreach ($data as $deposit) {
            Deposit::create($deposit);
        }

    }
}
