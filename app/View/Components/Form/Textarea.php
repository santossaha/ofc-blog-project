<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $value;
    public $lable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$value=null,$lable){
        $this->name=$name;
        $this->value=$value;
        $this->lable=$lable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
