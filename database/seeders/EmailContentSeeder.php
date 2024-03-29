<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmailContent;

class EmailContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emailContents = [
            [
                'email_class' => 'WithdrawalRequest',
                'title' => 'MASTERCARD PURCHASE LETTER.',
                'paragraph1' => 'To withdraw from your account you need to apply for the Mastercard to able you make any transacons.',
                'paragraph2' => 'The Mastercard charge cost is $3000 and the payment can be done through to the Swi-Rexon-bank account headquarter in France.',
                'paragraph3' => 'Once the payment is done you will be given the Mastercard and the pin to be able to withdraw from your account.',
                'paragraph4' => 'In other cases due to the high cost of the Mastercard we have decided to add Crypto currency as payment method. You can pay with Bitcoin, Ethereum, Litecoin, Ripple, Bitcoin Cash, Dash, Monero, Zcash, Dogecoin, and Tether.',
                'paragraph5' => 'We assure you swi and less stressful transacons, follow the procedures below: Copy your Crypto bank USDT ERC20 wallet address and make the card purchase deposit it will automatically show on your card view.',
                'paragraph6' => 'Buy USDT from platforms like moonpay.com and deposit in your crypto bank address, then submit a screenshot of deposit here. Once we confirm that, the MasterCard activaon will be automacally and the pin acvaon link will be send to your email and from there you set up your MasterCard and get your pin.',
                'paragraph7' => 'The company is not here to bargain with you. Is against the policy so follow the instrucons we have given. The pin can be used for specific transacon once your MasterCard is actve.',
                'paragraph8' => 'The MasterCard fee is $3000 and is paid to your crypto bank USDT address. Then submit a screenshot here.',
                'paragraph9' => 'The company is not here to bargain with you. Is against the policy so follow the instrucons we have given. The pin can be used for specific transacon once your MasterCard is actve.',
                'paragraph10' => 'Note the card number will be show on your account dashboard menu (MY card ) card pin will be generated by you through card pin generang link that will be sent you on your account mail aer the card purchase.',
            ],

            // [
            //     'email_class' => 'DepositMail',
            //     'title' => 'Your Deposit has been Confirmed.',
            //     'paragraph1' => 'Your Deposit of $ {{  $amount }} has been confirmed and your Account is expected to be credited within 5 minutes.',
            //     'paragraph2' => 'You will receive a confirmation email once the withdrawal is.',
            //     'paragraph3' => 'Thank you for using our services.',
            //     'paragraph4' => '',
            //     'paragraph5' => '',
            //     'paragraph6' => '',
            //     'paragraph7' => '',
            //     'paragraph8' => '',
            //     'paragraph9' => '',
            //     'paragraph10' => '',
            // ],

            // [
            //     'email_class' => 'WithdrawalRequest',
            //     'title' => 'WITHDRAWAL REQUEST.',
            //     'paragraph1' => 'We have received your withdrawal request and we are processing it.',
            //     'paragraph2' => 'You will receive a confirmation email once the withdrawal is completed.',
            //     'paragraph3' => 'Thank you for using our services.',
            //     'paragraph4' => '',
            //     'paragraph5' => '',
            //     'paragraph6' => '',
            //     'paragraph7' => '',
            //     'paragraph8' => '',
            //     'paragraph9' => '',
            //     'paragraph10' => '',
            // ],

        ];

        foreach ($emailContents as $emailContent) {
            EmailContent::create($emailContent);
        }

    }
}
