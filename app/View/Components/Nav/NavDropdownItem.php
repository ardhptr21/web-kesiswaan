<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;

class NavDropdownItem extends Component
{
    public string $text;
    public string $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $text, string $link = "#")
    {
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.nav-dropdown-item');
    }
}
