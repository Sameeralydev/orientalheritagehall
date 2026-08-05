<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'], 'email' => ['required', 'email', 'max:160'],
            'phone' => ['required', 'string', 'regex:/^(?:\\+44|0)\\s?7[0-9\\s]{8,13}$/'],
            'event_type' => ['required', 'string', 'max:80'], 'preferred_date' => ['nullable', 'date'],
            'alternative_date' => ['nullable', 'date'], 'guests' => ['required', 'integer', 'min:1', 'max:2000'],
            'space' => ['nullable', 'string', 'max:100'], 'package' => ['nullable', 'string', 'max:40'],
            'message' => ['nullable', 'string', 'max:3000'], 'consent' => ['accepted'],
        ];
    }
}
