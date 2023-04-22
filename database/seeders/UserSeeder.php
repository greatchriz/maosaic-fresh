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
         $data = [
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'account_number' => Str::random(10),
                'admin' => false,
            ],

            [
                'name' => 'admin',
                'email' => 'admin@crownagent.org',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'account_number' => Str::random(10),
                'admin' => true,
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
                'admin' => $d['admin'],
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
