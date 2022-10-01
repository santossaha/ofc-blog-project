<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class BlogList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $blogImage;
    public $publishBy;
    public $publishDate;
    public $description;
    public $blogDetailUrl;

    public function __construct($title, $blogImage, $publishBy, $publishDate, $description, $blogDetailUrl)
    {
        $this->title=$title;
        $this->blogImage=$blogImage;
        $this->publishBy=$publishBy;
        $this->publishDate=$publishDate;
        $this->description=$description;
        $this->blogDetailUrl=$blogDetailUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.blog-list');
    }
}
