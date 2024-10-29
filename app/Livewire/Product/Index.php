<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Index extends Component
{
    public $showTambahData = true;
    public $type = 'list';

    public function render()
    {
        return view('livewire.product.index');
    }
}