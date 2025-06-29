<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->authenticate();

        // $request->session()->regenerate();
        // $user = User::where('user_type', 1)->first();
      
        // if (!$user)
        //    return redirect()->intended(route('product', absolute: false))->with('success', 'Welcome'.' '. Auth::user()->name. ' '.'You\'r logged in');
        // else{
        //     return redirect()->intended(route('admin', absolute: false))->with('success', 'Welcome'.' '. Auth::user()->name. ' '.'You\'r logged in');
        // }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
             return redirect()->intended(route('product', absolute: false))->with('success', 'Welcome'.' '. Auth::user()->name. ' '.'You\'r logged in');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
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

        return redirect()->intended(route('product', absolute: false));
    }
}
