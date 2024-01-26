<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    //initialize numbers for calculator
    public $number1 = 0;
    public $number2 = 0;
    //operations for calculator
    public string $action = "+";
    //result variable
    public float $result = 0;
    //dynamically disabling "equals" button
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator')
        ->layout('layouts.app');
        
    }

    public function calculate(){
        //type casting string to float
        $num1 = (float) $this->number1;
        $num2 = (float) $this->number2;
        //if conditions for each valid operator input
        if($this->action == "-")
            $this->result = $num1 - $num2;
        else if($this->action == "+")
            $this->result = $num2 + $num1;
        else if($this->action == "*")
            $this->result = $num2 * $num1;
        else if($this->action == "/")
            $this->result = $num2 / $num2;
        else if($this->action == "%")
            $this->result = $num1 / 100 * $num2;
    }

    public function updated($property){
        //disable button by default when no values are present
        if($this->number1 == '' || $this->number2 == ''){
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
    
}
