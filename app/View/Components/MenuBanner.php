<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $link,
        public string $image,
        public string $column,
        public bool $newTab = false
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-banner');
    }
}
