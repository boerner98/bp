<?php

namespace App\Http\Controllers;

use App\Models\Teckel;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class TeckelController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'zuchtbuch' => ['required', 'string', 'max:255'],
            'zuchtbuchnr' =>['required', 'string', 'max:255'],
            'birthday' => ['date','nullable'],
        ]);

        $teckel = Teckel::create([
            'name' => $request->name,
            'zuchtbuch' => $request->zuchtbuch,
            'zuchtbuchnr' => $request->zuchtbuchnr,
            'birthday' => $request->birthday,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
