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
    public $show = false;
    public $trips = [];
    public $items = [];

    public function show(): void
    {
        $this->trips();
        $this->items();
        $this->show = true;
    }

    public function trips(): void
    {
        $tripQuery = Trip::where('user_id', Auth::user()->id);
        $this->trips = (clone $tripQuery)->count()
            ? $tripQuery->where('start', '>', now()->toDateTimeString())->limit(5)->get()
            : [];
    }

    public function items(): void
    {
        $itemQuery = Item::where('user_id', Auth::user()->id);
        $this->items = (clone $itemQuery)->count()
            ? $itemQuery->limit(20)->get()
            : [];
    }

    public function render(): View
    {
        return view('livewire.pack-modal');
    }
}
