<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateTripRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->id === $this->user()->id;
    }

    public function rules(): array
    {
        return [
            'name'     => 'required|max:40|min:3',
            'location' => 'required|max:80|min:3',
            'start'    => 'required|date|after_or_equal:today',
            'end'      => 'required|date|after:start',
        ];
    }
}
