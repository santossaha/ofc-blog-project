<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $lable;
    public $selectedOptions;
    public $options;
    public $multiple;
    public function __construct($name,$lable,$options,$multiple=null)
    {
        $this->name=$name;
        $this->lable=$lable;
        $this->options=$options;
        $this->multiple=$multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
    public function isSelected($option)
{
    return in_array($option, $this->selectedOptions);
}
}
