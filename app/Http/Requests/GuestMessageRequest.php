<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'string', 'min:2', 'email', 'max:100'],
            'phone' => ['string', 'max:20', 'min:4', 'nullable'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }
}
