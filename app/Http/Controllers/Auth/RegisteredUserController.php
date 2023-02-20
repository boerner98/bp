<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Output\ConsoleOutput;
use function PHPUnit\Framework\stringContains;

/* https://dev.to/kingsconsult/customize-laravel-auth-laravel-breeze-registration-and-login-1769 */

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'vorname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'breeder' =>['boolean'],
            'address' => ['string', 'nullable'],
            'plz' => ['integer','nullable', 'digits:5'], //https://stackoverflow.com/questions/39539436/validating-a-numeric-inputs-length-in-laravel-5
            'ort' => ['string', 'nullable'],
            'kontakt' => ['string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'vorname' => $request -> vorname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'plz' => $request -> plz,
            'ort' => $request -> ort,
            'breeder' => $request->breeder,
            'kontakt' => $request->kontakt,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
