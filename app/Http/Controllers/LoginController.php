<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt([
            'login' => $request->input('login'),
            'password' => $request->input('password')
        ], true)) {
            return Auth::user();
        }
        abort(401);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('section.index'));
    }

    public function register(Request $request, \Faker\Generator $faker)
    {
        if(Auth::check()) abort(400);

        $this->validate($request, [
            'login' => 'required|max:255'
        ]);
        
        Auth::login(User::create([
            'login' => $request->input('login'),
            'password' => Hash::make($request->input('password')),
            'first_name' => $faker->firstNameMale,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'role_title' => 'user'
        ]), true);
    }
}
