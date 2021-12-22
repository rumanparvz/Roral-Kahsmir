<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function addContact()
    {
   

        return redirect()->to('/contact-form-success');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
