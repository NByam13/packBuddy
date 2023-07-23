<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PackController extends Controller
{
    public function index(): View
    {
        return view('packs.index');
    }
}
