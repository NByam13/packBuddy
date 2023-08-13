<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DeleteTripRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->id === $this->trip->user_id;
    }
}
