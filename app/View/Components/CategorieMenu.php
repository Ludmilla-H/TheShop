<?php

namespace App\View\Components;

use Closure;
use App\Models\Categorie;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategorieMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $categories = Categorie::all() ;
        return view('components.categorie-menu' , compact('categories'));
    }
}
