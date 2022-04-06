<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class CardNews extends Component
{
    public string $title;
    public string $short;
    public string $img;
    public string $date;
    public string $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $short, string $img, string $date, string $link = '#')
    {
        $this->title = $title;
        $this->short = $short;
        $this->img = $img;
        $this->date = $date;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card-news');
    }
}
