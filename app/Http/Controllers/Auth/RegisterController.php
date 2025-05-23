<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if($request->tryToRegister()) return to_route('dashboard');
        
        return back()->with(["message" => "Verifique os dados informados"]);
    }
}
