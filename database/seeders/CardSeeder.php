<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [

            [
                'card_number' => '1234567890123456',
                'expiry_date' => '12/24',
                'cvc' => '123',
                'pin' => '1234',
                'name' => 'John Doe',
                'type' => 'Visa',
                'user_id' => 1,
            ],
            [
                'card_number' => '1234567890123456',
                'expiry_date' => '12/24',
                'cvc' => '123',
                'pin' => '1234',
                'name' => 'John Doe',
                'type' => 'Visa',
                'user_id' => 2,
            ],
        ];

        foreach ($cards as $card) {
            \App\Models\Card::create([
                'card_number' => $card['card_number'],
                'expiry_date' => $card['expiry_date'],
                'cvc' => $card['cvc'],
                'pin' => $card['pin'],
                'name' => $card['name'],
                'type' => $card['type'],
                'user_id' => $card['user_id'],]);
        }
    }
}
