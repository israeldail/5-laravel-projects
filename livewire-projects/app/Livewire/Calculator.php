<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1;
    public $num2;
    public $total;
    public function render()
    {
        return view('livewire.calculator');
    }

    public function add($a,$b) {
        $total = $a + $b;
        return $total;
    }

    public function sub($a,$b) {
        $total = $a - $b;
        return $total;
    }

    public function mul($a,$b) {
        $total = $a * $b;
        return $total;
    }

    public function div($a,$b) {
        $total = $a / $b;
        return $total;
    }
}
