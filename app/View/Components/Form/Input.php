<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $value;
    public $lable;
    public $place;
    public $type;
    public $accept;
    public $defaultImage;
    public $atrMultiple;
    public $size;
    public function __construct($name,$value=null,$lable,$place=null,$type=null,$accept=null,$defaultImage=null,$atrMultiple=null,$size=null){
        $this->name=$name;
        $this->defaultImage=$defaultImage;
        $this->value=$value;
        $this->accept=$accept;
        $this->type=$type;
        $this->lable=$lable;
        $this->place=$place;
        $this->atrMultiple=$atrMultiple;
        $this->size=$size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
