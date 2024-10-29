<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Tambah extends Component
{

    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public $nama;
    #[Validate('required|numeric|min:0')]
    public $harga;
    public $slug;
    #[Validate('image|max:1024')]
    public $gambar;

    public function render()
    {
        return view('livewire.product.tambah');
    }

    public function tambahData()
    {
        dd('asdasd');
    }
}