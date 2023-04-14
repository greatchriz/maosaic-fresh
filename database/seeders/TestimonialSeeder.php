<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'christopher',
                'work' => 'CEO of Company',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel tincidunt lacinia, nunc nisl aliquam lorem, eget aliquam nisl nisl sit amet lorem. Sed euismod, nisl vel tincidunt lacinia, nunc nisl aliquam lorem, eget aliquam nisl nisl sit amet lorem.',
                'image' => 'img/test-img/2.jpg',
            ],

            [
                'name' => 'matthew',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/1.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/3.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/4.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/5.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/6.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/7.jpg',
            ],

            [
                'name' => 'james',
                'work' => 'sector manager',
                'description' => 'this is a good company their service is very good and their staff is very friendly and helpful. I would recommend this company to anyone who is looking for a good company to work with.',
                'image' => 'img/test-img/8.jpg',
            ],
        ];


        foreach ($data as $item) {
            \App\Models\Testimonial::create($item);
        }
    }
}
