<?php

namespace App\Http\Controllers;

use App\Http\Resources\PackResource;
use App\Models\Pack;
use Illuminate\View\View;

class PackController extends Controller
{
    public function index(): View
    {
        return view('packs.index', [
            'packs' => PackResource::collection(Pack::all())
        ]);
    }
}
