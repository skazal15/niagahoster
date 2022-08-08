<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Content extends Component
{
     /**
     * @var string
     */
    public $niaga;
    /**
     * Create a new component instance.
     *@param string $niaga
     * @return void
     */
   
    public function __construct($niaga)
    {
        //
        $this->niaga=$niaga;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content');
    }
}
