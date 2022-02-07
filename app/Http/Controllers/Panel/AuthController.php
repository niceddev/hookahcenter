<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(UserRequest $request)
    {
        $validated = $request->validated();

        if(auth()->attempt($validated)){
            redirect()->route('panel.dashboard');
        }

        return back()->withErrors([
            'failed_auth' => 'Неверный логин и/или пароль.'
        ]);
    }

    public function logout()
    {
        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('panel.login');
    }
}
