<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Assemblytbl;
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
            'CName' => ['required', 'string', 'max:255'],
            'Location' => ['required', 'string', 'max:255'],
            'GPSAddress' => ['required', 'string', 'max:255'],
            'District' => ['required', 'string', 'max:255'],
            'Area' => ['required', 'string', 'max:255'],
            'CCode' => ['required', 'string', 'max:255', 'unique:assemblytbl'],
            'Password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $user = Assemblytbl::create([
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
