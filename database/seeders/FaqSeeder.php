<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
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
                'dt' => 'What is Crownagent Online?',
                'dd' => 'It is Crownagent’s new internet banking service that features enhanced user experience and interface, allowing customers to do various banking transactions conveniently, 24/7.',
            ],

            [
                'dt' => 'What are the benefits of Crownagent Online?',
                'dd' => 'Crownagent Online offers a wide range of services that are available 24/7. It also provides a more convenient and secure way of doing banking transactions.',
            ],

            [
                'dt' => 'How do I enroll in Crownagent Online?',
                'dd' => 'You can enroll in Crownagent Online by visiting any Crownagent branch and presenting the following requirements: <br><br>1. Valid ID <br>2. ATM Card <br>3. ATM PIN <br>4. One (1) valid email address <br><br>For more information, you may visit any Crownagent branch or call our Customer Contact Center at (02) 8700-700.',
            ],

            [
                'dt' => 'How do I log in to Crownagent Online?',
                'dd' => 'You can log in to Crownagent Online by visiting www.Crownagentonline.com and entering your User ID and Password. You can also log in to Crownagent Online by visiting any Crownagent branch and using the Crownagent Online kiosk.',
            ],

            [
                'dt' => 'What browser is Metrobank Online compatible with?',
                'dd' => 'Metrobank Online is compatible with the following browsers: <br><br>1. Internet Explorer 11 <br>2. Google Chrome <br>3. Mozilla Firefox <br>4. Safari <br><br>For the best experience, we recommend using Google Chrome.',
            ],

            [
                'dt' => 'How secure is it to do bank transactions via Metrobank Online?',
                'dd' => 'Metrobank Online is secured by SSL (Secure Socket Layer) technology, a standard security technology for establishing an encrypted link between a web server and a browser. This link ensures that all data passed between the web server and browsers remain private and integral. This is the same technology used by online shopping sites.',
            ],

            [
                'dt' => 'Can I use an international number?',
                'dd' => 'Yes as long as the mobile number is from these SMS-supported countries:',
            ],

            [
                'dt' => 'Can I use a different mobile number during enrollment?',
                'dd' => 'No. When signing up to Metrobank Online, you should use the mobile number you registered with the bank. If you need to update your mobile number, visit any Metrobank branch or request for an update online here.',
            ],

        ];

        foreach ($data as $item) {
            Faq::create([
                'dt' => $item['dt'],
                'dd' => $item['dd'],
            ]);
        }
    }
}
