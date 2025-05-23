<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:3"],
            "email" => ["required", "email", "string", "confirmed", "unique:users"],
            "password" => ["required", "string", Password:: defaults()],
        ];
    }

    public function tryToRegister(): bool
    {
       $user = User::query()->create(
            $this->validated()
    );
        
        auth()->login($user);

        return true;
    }
}
