<?php

namespace App\Http\Requests\ClickLog;

use App\Enums\ClickLogSource;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'source' => [
                'required',
                Rule::in(array_column(ClickLogSource::cases(), 'value')),
            ],
            'open_url' => 'nullable',
        ];
    }
}
