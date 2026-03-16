<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResultCard extends Component
{
    public $rede;
    public $link;
    public $title;
    public $description;
    public $perfil;

    public function __construct($rede, $link, $title, $description, $perfil)
    {
        $this->rede = $rede;
        $this->link = $link;
        $this->title = $title;
        $this->description = $description;
        $this->perfil = $perfil;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.result-card');
    }
}