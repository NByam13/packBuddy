<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripRequest;
use App\Http\Resources\TripResource;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(Request $request)
    {
        return view('trips.index', [
            'trips' => TripResource::collection(Trip::where('user_id', $request->user()->id)->get())
        ]);
    }

    public function create(CreateTripRequest $request)
    {
        Trip::create([
            ...$request->validated(),
            'user_id' => $request->user()->id
        ]);

        return view('trips.index', [
            'trips' => TripResource::collection(Trip::where('user_id', $request->user()->id)->get())
        ]);
    }
}
