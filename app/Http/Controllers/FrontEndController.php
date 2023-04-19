<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Faq;
use Illuminate\Support\Arr;

class FrontEndController extends Controller
{
    public function home ()
    {
        return view('front-end.home');
    }

    public function services ()
    {
        return view('front-end.services');
    }

    public function faq ()
    {
        $faqs = Faq::All();
        return view('front-end.faq',
            [
                'faqs' => $faqs
            ]
        );
    }

    public function contact ()
    {
        return view('front-end.contact');
    }

    public function about ()
    {
        return view('front-end.about');
    }

    public function creditCard ()
    {
        return view('front-end.credit-card');
    }

    public function career ()
    {
        return view('front-end.career');
    }

    // create a method personalOverdraft like the one above and return the view personal-overdraft.blade.php
    public function personalOverdraft ()
    {
        // use Article model to get all articles where page_title = 'personal-overdraft' with sections related to it and convert it to array
        $firstArticle = Article::with('sections')->where('page_title', 'personal-overdraft')->find(1);

        $secondArticle = Article::find(2)->sections()->where('tag', 'main')->get();

        // retrieve ninth article with the pattern above
        $thirdArticle = Article::find(3)->sections()->where('tag', 'main')->get();

        $threeArticle = Article::find(3);

        // retrieve sixth article with the pattern above
        $fourthArticle = Article::find(4)->sections()->where('tag', 'main')->get();

        // retrieve fifth article with the pattern above
        $fifthArticle = Article::find(5);

        // retrieve fifth article with the pattern above
        $fifthArticleMain = Article::find(5)->sections()->where('tag', 'main')->get();

        // retrieve fifth article with the pattern above
        $fifthArticleSteps = Article::find(5)->sections()->where('tag', 'steps')->get();

        // retrieve sixth article with the pattern above
        $sixthArticle = Article::find(6)->sections()->where('tag', 'main')->get();

        // retrieve seventh article with the pattern above
        $seventhArticle = Article::find(7)->sections()->where('tag', 'main')->get();

        // retrieve seventh article with the pattern above
        $seventhArticleSteps = Article::find(7)->sections()->where('tag', 'steps')->get();

        // retrieve eight article with the pattern above
        $eightArticle = Article::find(8)->sections()->where('tag', 'main')->get();

        // retrieve ninth article with the pattern above
        $ninthArticle = Article::find(9)->sections()->where('tag', 'main')->get();

        return view('front-end.personal-overdraft', [
            'firstArticle' => $firstArticle,
            'secondArticle' => $secondArticle,
            'thirdArticle' => $thirdArticle,
            'threeArticle' => $threeArticle,
            'fourthArticle' => $fourthArticle,
            'fifthArticleMain' => $fifthArticleMain,
            'fifthArticleSteps' => $fifthArticleSteps,
            'fifthArticle' => $fifthArticle,
            'sixthArticle' => $sixthArticle,
            'seventhArticle' => $seventhArticle,
            'seventhArticleSteps' => $seventhArticleSteps,
            'eightArticle' => $eightArticle,
            'ninthArticle' => $ninthArticle,
        ]);
    }

    public function protectYourself ()
    {
        // retrieve tenth article with the relationship
        $tenthArticle = Article::find(10);
        $eleventhArticle = Article::find(11)->sections()->where('tag', 'main')->get();
        $twelveArticle = Article::find(12)->sections()->where('tag', 'main')->get();
        $thirteenArticle = Article::find(13)->sections()->where('tag', 'main')->get();


        return view('front-end.protect-yourself', [
            'tenthArticle' => $tenthArticle,
            'eleventhArticle' => $eleventhArticle,
            'twelveArticle' => $twelveArticle,
            'thirteenArticle' => $thirteenArticle,
        ]);
    }

}
