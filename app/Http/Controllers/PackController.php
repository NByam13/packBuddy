<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePackRequest;
use App\Http\Resources\PackResource;
use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PackController extends Controller
{
    public function index(Request $request): View
    {
        return view('packs.index', [
            'packs' => PackResource::collection(Pack::where('user_id', $request->user()->id)->get())
        ]);
    }

    public function create(CreatePackRequest $request)
    {
        Pack::create([
            ...$request->validated(),
            'user_id' => $request->user()->id
        ]);

        return view('packs.index', [
            'packs' => PackResource::collection(Pack::where('user_id', $request->user()->id)->get())
        ]);
    }
}
