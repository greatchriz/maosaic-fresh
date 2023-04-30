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
        $users = \App\Models\User::all(); //get all users
        //create 10 unique deposits through the user relationship of the Deposit model
        $users->each(function ($user) {
            Deposit::factory()->count(50)->create([
                'user_id' => $user->id,
            ]);
        });

    }
}
