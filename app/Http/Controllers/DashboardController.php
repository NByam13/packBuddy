<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $trips = Trip::query()->orderBy('start', 'desc')->limit(3)->get();

        return view('dashboard', [
            'packs' => Pack::all(),
            'trips' =>$trips
        ]);
    }
}
