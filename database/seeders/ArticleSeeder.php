<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Section;

class ArticleSeeder extends Seeder
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
                'page_title' => 'personal-overdraft',
                'title' => 'A fairer overdraft',
                'slug' => 'a-fairer-overdraft',
            ],
            [
                'page_title' => 'personal-overdraft',
                'title' => 'How does an overdraft work?',
                'slug' => 'how-does-an-overdraft-work',
            ],
            [
                'page_title' => 'personal-overdraft',
                'title' => 'How a Crownagent overdraft can help you',
                'slug' => 'how-a-Crownagent-overdraft-can-help-you',
            ],
            [
                'page_title' => 'personal-overdraft',
                'title' => 'Our representative APR',
                'slug' => 'our-representative-apr',
            ],

            [
                'page_title' => 'personal-overdraft',
                'title' => 'control of your spending',
                'slug' => 'control-of-your-spending',
            ],

            [
                'page_title' => 'personal-overdraft',
                'title' => 'apply for an overdraft',
                'slug' => 'apply-for-an-overdraft',
            ],

            [
                'page_title' => 'personal-overdraft',
                'title' => 'About interest charges',
                'slug' => 'about-interest-charges',
            ],

            [
                'page_title' => 'personal-overdraft',
                'title' => 'Unarranged overdraft',
                'slug' => 'unarranged-overdraft',
            ],

            [
                'page_title' => 'personal-overdraft',
                'title' => 'Struggling to pay',
                'slug' => 'struggling-to-pay',
            ],

            [
                'page_title' => 'protect-yourself',
                'title' => 'Reporting fraud',
                'slug' => 'reporting-fraud',
            ],

            [
                'page_title' => 'protect-yourself',
                'title' => 'Stay safe from fraud',
                'slug' => 'stay-safe-from-fraud',
            ],

            [
                'page_title' => 'protect-yourself',
                'title' => 'Coronavirus fraud advice',
                'slug' => 'coronavirus-fraud-advice',
            ],

            [
                'page_title' => 'protect-yourself',
                'title' => 'How Crownagent protects your money',
                'slug' => 'how-Crownagent-protects-your-money',
            ],



        ];

        // for each $data item create an article
        foreach ($data as $item) {
            // create an article
            $article = Article::create($item);
        }

    }
}
