<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 2;

    public function increment() {
        return  $this->count = $this->count + 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
