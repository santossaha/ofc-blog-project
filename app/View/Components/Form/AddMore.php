<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class AddMore extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $addbutton;
    public function __construct($addbutton)
    {
        $this->addbutton = $addbutton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.add-more');
    }
}
