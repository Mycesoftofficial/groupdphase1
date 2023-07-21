<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('authentication.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'church_name' => 'required|string',
            'church_code' => 'required|string',
        ]);
    
        // Use your custom authentication logic here, based on 'church_name' and 'church_code'
        // For example, you can query your database to find the user based on these fields.
    
        $user = User::where('church_name', $request->church_name)
                    ->where('church_code', $request->church_code)
                    ->first();
    
        // Check if the user is found and authenticate manually
        if ($user) {
            Auth::login($user);
    
            $request->session()->regenerate();
    
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    
        return back()->withErrors([
            'church_code' => 'The provided credentials do not match our records.',
        ]);
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
