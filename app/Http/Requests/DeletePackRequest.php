<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DeletePackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->id === $this->pack->user_id;
    }
}
