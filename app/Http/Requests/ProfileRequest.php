<?php

namespace App\Http\Requests;

use App\Rules\CheckHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:30'
            ],
            'description' => [
                'nullable'
            ],
            'handler' =>
                [
                    'required',
                    Rule::unique('users')->ignoreModel($this->user()),
                    new CheckHandler
                ],
        ];
    }
}
