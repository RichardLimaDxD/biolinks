<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MakeLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "email" => ["required", "email"],
            "password" => ["required", "min:6"]   
        ];
    }

    public function attempt(): bool
    { 
        if (($user = User::query()
            ->where("email", "=", $this->email)
            ->first()) &&
            Hash::check($this->password, $user->password)
        ) {
            auth()->login($user);

            return true;
        }

        return false;
    }
}
