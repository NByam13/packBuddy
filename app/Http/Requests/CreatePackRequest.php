<?php

namespace App\Http\Requests;

use App\Models\Item;
use Illuminate\Foundation\Http\FormRequest;

class CreatePackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'  => 'required|max:40|min:3',
            'trip'  => 'sometimes|exists:trips,id',
            'items' => [
                'sometimes',
                'exists' => fn() => $this->collect('items')->every(
                    fn($item) => Item::query()->where('id', $item)->exists()
                ),
            ]
        ];
    }
}
