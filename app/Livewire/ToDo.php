<?php

namespace App\Livewire;

use Livewire\Component;

class ToDo extends Component
{
    public $todo = "";

    public $todos = ['read a book', 'practice some code'];

    public function add() {
         $this->todos[] = $this->todo;
         $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.to-do');
    }
}
