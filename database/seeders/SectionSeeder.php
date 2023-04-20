<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $sections = [
            [
                'content' => 'Designed for short term borrowing, apply for an overdraft to help cover unexpected expenses. Easy to manage and fair on fees.',
                'article_id' => 1,
            ],
            [
                'title' => 'How does an overdraft work?',
                'content' => 'We all need a little extra support from time to time. At Crownagent, we know that an overdraft can act like a short-term safety net when you’re feeling the burn financially.<br><br>That’s why we’ve designed our overdraft to be fair and flexible. You can apply for an overdraft of up to £1,000, and you’ll only pay interest on the amount you use.<br><br>And if you’re struggling to pay it back, we’ll work with you to find a solution.',
                'article_id' => 2,
            ],
            [
                'title' => 'Your interest rate',
                'content' => 'Interest is accrued daily and charged on the 15th of the following month – and it’ll always be updated clearly in your app.<br><br>We offer interest rates of 15%, 25% and 35% EAR (variable) for arranged overdrafts based on a range of different factors, including information a credit reference agency - and a representative rate of 15% APR* (variable), assumed credit limit £1,200. You can use our overdraft calculator to see how much an overdraft will cost you.',
                'article_id' => 3,
            ],

            [
                'title' => 'Complete control',
                'content' => 'Once your overdraft is approved, you’ll be able to manage the amount you need within that limit in the app. Something to note: you can’t reduce your overdraft limit to less than the amount you’re currently overdrawn by.',
                'article_id' => 3,
            ],

            [
                'title' => 'No fees',
                'content' => 'We don’t charge any fees for using your overdraft. You’ll only pay interest on the amount you use, and you can repay it at any time without any charges.',
                'article_id' => 3,
            ],

            [
                'title' => 'A bit of housekeeping',
                'content' => 'They’re easy to set up and just as easy to manage – but don’t forget, a Crownagent overdraft is a credit facility. So, it could affect your credit score.',
                'article_id' => 3,
            ],

            [
                'title' => 'Gone over the limit?',
                'content' => 'If you go over the overdraft you’ve agreed with us, you will incur no charges or interest on your overdrawn amount. Be aware though your transactions may be cancelled due to not having funds. Just something to be mindful of. Also on a related note: if you want to reduce your limit you will only be able to do this in your app if your balance is lower than your limit.',
                'article_id' => 3,
            ],

            [
                'title' => 'Coronavirus support',
                'content' => 'A lot of people are facing financial challenges at the moment, and you may be finding that you need a little more support than usual.<br><br>
                If you’ve been impacted or expect to be impacted by coronavirus please take a look at our blog content and content on money worries for further information and guidance.<br><br>
                We’ve built these tools so that you check your overdraft eligibility and what an overdraft could cost you.',
                'article_id' => 3,
            ],

            [
                'content' => 'Our representative APR is the advertised rate (or a lower rate) that we reasonably expect at least 51% of customers who are accepted for and enter into an overdraft agreement will get with us.
                <br>
                An EAR (Equivalent Annual Rate) is a common way of showing interest rates on overdrafts which you can use to compare different banks’ interest rates - this does not include fees that some banks may charge you in addition to interest.
                <br>
                An APR (Annual Percentage Rate) is a common way of showing interest rates on overdrafts which includes fees that banks may charge. Crownagent does not charge additional fees.',
                'article_id' => 4,
            ],

            [
                'content' => 'There are times when you may need an overdraft, like if you have a scheduled payment and not quite enough money. That’s why we’ve designed an overdraft that’s flexible and easy to manage. An overdraft that puts you in control.',
                'article_id' => 5,
            ],

            [
                'content' => 'Need an overdraft, apply in seconds in the app.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'Adjust your overdraft limit with your overdraft slider in app.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'Manage your overdraft in the app.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'See how much it will cost you before you apply.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'You’ll also be able to use the app to see how many days you’ve been in your overdraft, and how much interest you’ve accrued.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'See your real-time balance in the Pulse. Whenever money leaves your account, you’ll know about it.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'Never miss a scheduled payment again – we’ll remind you when they’re due and let you know if you have insufficient funds. We’ll send you an alert when you’re using an overdraft, too.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'content' => 'With Spending Insights, you’ll be able to see an overview of your spending habits, so you can see where there might be room for improvement.',
                'tag' => 'steps',
                'article_id' => 5,
            ],

            [
                'title' => 'How to apply for an overdraft',
                'content' => 'When you open an account with Crownagent Bank, you may be offered an overdraft subject to a full check with a Credit Reference Agency – this way we can help ensure that an overdraft is both affordable and manageable for your current situation. Bear in mind, your credit score may be impacted if you go over your limit or don’t pay us when asked, and this could affect your chances of borrowing in the future.',
                'article_id' => 6,
            ],

            [
                'title' => 'About interest charges',
                'content' => 'If you do have an overdraft with us, we charge interest at 15%, 25%, or 35% EAR* (variable) based on a range of factors including information from multiple credit reference agencies. This is the actual rate you’ll pay, although we may update rates from time to time (but we’ll always let you know beforehand, so you can decide whether to keep it or not). Interest is accrued daily, charged on the 15th of the following month and updated clearly in your app.',
                'article_id' => 7,
            ],

            [
                'content' => '*An EAR (Equivalent Annual Rate) is a common way of showing interest rates on overdrafts which you can use to compare different banks’ interest rates. This does not include fees that some banks may charge you in addition to interest. Crownagent does not charge additional fees.',
                'tag' => 'steps',
                'article_id' => 7,
            ],

            [
                'title' => 'Unarranged overdraft charges',
                'content' => 'We want our overdraft to feel like a source of reassurance and support in your everyday life, rather than something that further contributes to financial pressures – so we’ve taken steps to make sure that you’ll never spiral out of control.<br><br>
                Payments that would take you over your overdraft limit may be stopped before they can go through. However, in the rare instances where you do go into an unarranged overdraft by accident — and let’s face it, it happens — you won’t incur any charges or interest on the overdrawn amount.',
                'article_id' => 8,
            ],

            [
                'title' => 'Struggling to pay off your overdraft?',
                'content' => 'You’re not on your own. Crownagent’s budgeting tools are designed to make money management easier, but if you’re still struggling, we’re on hand 24/7. Contact customer support in-app via live chat. Free debt counselling, debt adjusting and providing of credit information services is also available from the Money Advice Service – find out more by visiting the Money Advice Service website.',
                'article_id' => 9,
            ],



            // protect yourself section

            [
                'title' => 'Reporting fraud',
                'content' => 'If you notice something suspicious, or think you may have been the victim of fraud, get in touch with our customer service team as soon as you can.<br><br>
                Whether you’re in the UK or abroad, calling us on 0207 930 4450 is the fastest way for us to get all the information we need. Or you can speak to us via our in-app chat, if you prefer. Either way, we’re here 24/7.',
                'image_path' => '../img/icons/fraud-247.png',
                'article_id' => 10,
            ],

            [
                'title' => 'Stay safe from fraud',
                'content' => 'Your Crownagent account is protected by industry-leading security features, but it’s important to stay personally aware too. To that end, we’ve rounded up some helpful links and resources about what fraud looks like and how you can avoid it.',
                'image_path' => '../img/icons/fraud-secure.png',
                'article_id' => 11,
            ],

            [
                'title' => 'Stay safe from fraud',
                'content' => 'Over the past year, there have been reports of various scams linked to the pandemic. <br><br> See our blog post for the latest trends and advice on how to keep your money safe.',
                'image_path' => '../img/icons/fraud-c19.png',
                'article_id' => 12,
            ],

            [
                'title' => 'How Crownagent protects your money',
                'content' => 'We’ve put powerful security measures in place to protect your money when you’re opening an account (e.g. video ID), logging into the app (e.g. biometric ID) or making a payment (e.g. real-time notifications). <br><br> Beyond your day-to-day spending, we’ve also built special features to keep your money safe when you’re paying someone new (e.g. Confirmation of Payee) or shopping online (e.g. 3D Secure).',
                'image_path' => '../img/icons/fraud-face.jpg',
                'article_id' => 13,
            ],



        ];

        // for each $sections item create a section
        foreach ($sections as $item) {
            // create a section
            $section = Section::create($item);
        }

    }
}
