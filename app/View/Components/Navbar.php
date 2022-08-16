<?php

namespace App\View\Components;

use App\Models\SiteSetting;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $background;
    public $site;
    public $text;
    public $shadow;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $background, string $text, string $shadow)
    {
        $site = SiteSetting::first();
        $this->background = $background;
        $this->text = $text;
        $this->shadow = $shadow;
        $this->site = $site;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
