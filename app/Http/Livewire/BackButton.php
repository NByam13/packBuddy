<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class BackButton extends Component
{
    public function back(): void
    {
        $this->redirect(route('dashboard'));
    }

    public function render(): View
    {
        return view('livewire.back-button');
    }
}
