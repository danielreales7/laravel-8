<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavComponent extends Component
{
    public $isOpen = false;

    public function isOpen()
    {
        if (!$this->isOpen) {
            $this->isOpen = true;
        } else {
            $this->isOpen = false;
        };
    }

    public function render()
    {
        return view('livewire.nav-component');
    }
}
