<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TripModal extends Component
{
    public $show;

    public function mount()
    {
        $this->show = false;
    }

    public function show()
    {
        $this->show = true;
    }

    public function close(): void
    {
        $this->show = false;
        $this->render();
    }

    public function render()
    {
        return view('livewire.trip-modal');
    }
}
