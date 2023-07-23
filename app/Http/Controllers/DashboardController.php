<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'packs' => Pack::all()
        ]);
    }
}
