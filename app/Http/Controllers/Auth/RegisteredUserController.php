<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'age' => ['required', 'string', 'max:200'],
            'education' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Auth::login($user = User::create([
            'fullname' => $request['fullname'],
            'gender' => $request['gender'],
            'age' => $request['age'],
            'education' => $request['education'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]));

        event(new Registered($user));

        Session::put('id',$user->id);

        return redirect('/login');
    
    }
}
