<?php

namespace App\Livewire;

use Livewire\Component;

class CascadingDropdown extends Component
{
    public function render()
    {
        return view('livewire.cascading-dropdown')
        ->layout('layouts.app');
    }
}
