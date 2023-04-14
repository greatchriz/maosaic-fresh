<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Faqs extends Component
{



     /**
     * The faq.
     *
     * @var string
     */
    public $faq;

    /**
     * Create a new component instance.
     *
     * @return void
     * * @param  string  $faq
     */
    public function __construct()
    {
        $this->faq = $faq;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faqs');
    }
}
