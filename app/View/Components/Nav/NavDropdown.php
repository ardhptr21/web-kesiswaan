<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;

class NavDropdown extends Component
{
    public string $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.nav-dropdown');
    }
}
