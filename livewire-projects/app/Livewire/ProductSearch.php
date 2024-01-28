<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];
    public function render()
    {
        $query = Products::query();
        if($this->search){
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%");
        }

        return view('livewire.product-search', [
            'products' => $query->paginate(20),
        ])->layout('layouts.app');
    }

    public function updated($property){
        if($property == 'search'){
            $this->resetPage();
        }
    }
}
