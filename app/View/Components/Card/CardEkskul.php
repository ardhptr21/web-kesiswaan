<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class CardEkskul extends Component
{
    public string $img;
    public string $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $img, string $title)
    {
        $this->img = $img;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card-ekskul');
    }
}
