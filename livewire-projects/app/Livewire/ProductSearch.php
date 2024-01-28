<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class ProductSearch extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.product-search', [
           'products' => Products::where($this->search)
        ])->layout('layouts.app');
    }
}
