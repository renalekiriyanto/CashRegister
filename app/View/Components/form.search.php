<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form.search extends Component
{
    /**
     * Create a new component instance.
     */
    public  $showTambahData = false;
    public function __construct($type)
    {
        switch ($type) {
            case 'list':
                $this->showTambahData = true;
                break;

            default:
                $this->showTambahData = false;
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.search');
    }
}