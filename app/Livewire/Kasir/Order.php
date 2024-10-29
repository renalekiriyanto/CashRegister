<?php

namespace App\Livewire\Kasir;

use Livewire\Component;

class Order extends Component
{
    public $search;
    public $type = 'order';

    public function render()
    {
        return view('livewire.kasir.order');
    }
}