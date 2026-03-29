<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardPlan extends Component
{
    public $typePlan;
    public $price;
    public $credits;
    public $daysToUse;
    public $priceForSearch;
    public $benefits;
    public function __construct($typePlan, $price, $credits, $daysToUse, $priceForSearch, $benefits = null)
    {
        $this->typePlan = $typePlan;
        $this->price = $price;
        $this->credits = $credits;
        $this->daysToUse = $daysToUse;
        $this->priceForSearch = $priceForSearch;
        $this->benefits = $benefits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-plan');
    }
}