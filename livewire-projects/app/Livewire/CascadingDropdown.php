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

        return view('livewire.cascading-dropdown')->layout('layouts.app');
    }

    public function changeContinent() {
        if ($this->selectedContinent !== '-1'){
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }


        return view('livewire.cascading-dropdown')
            ->layout('layouts.app');

    }
}
