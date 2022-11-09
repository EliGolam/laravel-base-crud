<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\models\Comic;

class ComicsCardComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Comic $comic)
    {
        $this->comic = $comic;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $comic = $this->comic;
        return view('components.comics-card-component', compact('comic'));
    }
}
