<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BigMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $bigTitle,
        public string $text,
        public string $link,
        public bool $newTab = false
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.big-menu');
    }
}
