<?php

namespace App\Livewire;

use Livewire\Component;


class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = 'customer';
    public string $company_name = '';
    public string $vat_number = '';

    //rules is a built-in property.
    protected $rules = [
        //defines minimum characters for each field and makes required field
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email',
        'password' => 'required|min:8',
        //required if role is "vendor"
        'company_name' => 'required_if:role, ==, vendor',
        'vat_number' => 'required_if:role, == ,vendor',
    ];


    public function render()
    {
        return view('livewire.register-form')->layout('layouts.app');
    }

    public function submit() {

        $this->validate();

        session()->flash('message', "USER HAS BEEN REGISTERED");

        $this->email = '';
        $this->password = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->role = '';
        $this->company_name = '';
        $this->vat_number = '';
    }

    public function updated($property): void
    {
        $this->validateOnly($property);
    }
}
