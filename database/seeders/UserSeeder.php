<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    // protected $data = [
    //     [
    //         'name' => 'test',
    //         'email' => 'test@gmail.com',
    //         'email_verified_at' => now(),
    //         'password' => Hash::make('password'), // password
    //         'remember_token' => Str::random(10),
    //         'account_number' => Str::random(10),
    //         'admin' => true,
    //     ],
    // ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // total_deposits
        // total_transfers
        // total_withdrawals
        // total_loans

         $data = [
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'account_number' => mt_rand(2000000000, 2999999999),
                // float for account balance
                'account_balance' => 4000.00,
                'admin' => false,
                'total_deposits' => '4000',
                'total_transfers' => '4000',
                'total_withdrawals' => '4000',
                'total_loans' => '4000',
            ],

            [
                'name' => 'admin',
                'email' => 'admin@crownagent.org',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'account_number' => mt_rand(2000000000, 2999999999),
                'account_balance' => 4000.00,
                'admin' => true,
                'total_deposits' => 4000.00,
                'total_transfers' => 4000.00,
                'total_withdrawals' => 4000.00,
                'total_loans' => 4000.00,
            ],

        ];

        foreach($data as $d) {
            User::create([
                'name' => $d['name'],
                'email' => $d['email'],
                'email_verified_at' => $d['email_verified_at'],
                'password' => $d['password'],
                'remember_token' => $d['remember_token'],
                'account_number' => $d['account_number'],
                'account_balance' => $d['account_balance'],
                'admin' => $d['admin'],
                'total_deposits' => $d['total_deposits'],
                'total_transfers' => $d['total_transfers'],
                'total_withdrawals' => $d['total_withdrawals'],
                'total_loans' => $d['total_loans'],
            ]);
        }

        // DB::table('users')->insert([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'), // password
        //     'remember_token' => Str::random(10),
        //     'account_number' => Str::random(10),
        // ]);

    }
}
