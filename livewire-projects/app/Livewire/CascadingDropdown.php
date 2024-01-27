<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount() {
        $this->continents = Continent::all();
    }

    public function render()
    {
<<<<<<< HEAD
        return view('livewire.cascading-dropdown')->layout('layouts.app');
    }

    public function changeContinent() {
        if ($this->selectedContinent !== '-1'){
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }

=======
        return view('livewire.cascading-dropdown')
        ->layout('layouts.app');
>>>>>>> ef25661d7a6e836db527e5101cf36125e5dc9a33
    }
}
