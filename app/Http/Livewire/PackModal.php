<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\Trip;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class PackModal extends Component
{
    public $show;
    public $trips = [];

    public function mount()
    {
        $this->show = false;
    }

    public function show(): void
    {
        $this->trips();
        $this->show = true;
    }

    public function close(): void
    {
        $this->show = false;
    }

    public function trips(): void
    {
        $tripQuery = Trip::where('user_id', Auth::user()->id);
        $this->trips = (clone $tripQuery)->count()
            ? $tripQuery->where('start', '>', now()->toDateTimeString())->limit(5)->get()
            : [];
    }

    public function render(): View
    {
        return view('livewire.pack-modal');
    }
}
