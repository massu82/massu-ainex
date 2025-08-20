<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CtaFooter extends Component
{
    public $title;
    public $link;
    public $buttonText;
    public $image;

    public function __construct($title = null, $link = null, $buttonText = null, $image = null)
    {
        $this->title = $title;
        $this->link = $link;
        $this->buttonText = $buttonText;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.cta-footer');
    }
}
