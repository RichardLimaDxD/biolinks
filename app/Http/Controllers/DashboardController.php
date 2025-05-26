<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()
                ->orderBy('sort')
                ->get()
        ]);
    }
}
