<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
            </div>
        blade;
    }
}
