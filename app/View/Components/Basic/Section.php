<?php

namespace App\View\Components\Basic;

use Illuminate\View\Component;

class Section extends Component
{
    public string $class;
    public string $id;

    public function __construct(string $class = '', string $id = '')
    {
        $this->class = $class;
        $this->id = $id;
    }

    public function render()
    {
        return view('components.basic.section');
    }
}
