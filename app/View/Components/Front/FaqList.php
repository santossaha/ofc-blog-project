<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class FaqList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $question;
    public $answer;
    public $fid;

    public function __construct($question, $answer, $fid)
    {
        $this->question=$question;
        $this->answer=$answer;
        $this->fid=$fid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.faq-list');
    }
}
