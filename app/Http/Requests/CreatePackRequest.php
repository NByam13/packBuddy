<?php

namespace App\Http\Requests;

use App\Models\Item;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreatePackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->id === $this->user()->id;
    }

    public function rules(): array
    {
        return [
            'name'  => 'required|max:40|min:3',
            'trip'  => 'sometimes|exists:trips,id',
        ];
    }
}
