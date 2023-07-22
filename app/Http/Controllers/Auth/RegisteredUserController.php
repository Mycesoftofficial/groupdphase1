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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('authentication.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'church_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'gps_address' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'church_code' => ['required', 'string',  'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'church_name' => $request->church_name,
            'location' => $request->location,
            'gps_address' => $request->gps_address,
            'district' => $request->district,
            'area' => $request->area,
            'church_code' => $request->church_code,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
