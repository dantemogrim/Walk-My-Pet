<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name'     => ['required', 'string', 'max:18', 'unique:users,name'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:3'],
            // TODO: 'phone' => ['', 'integer', 'min:10']

            // Not needed for db input

        ]);

        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->phone = $request->input('phone');
        $newUser->save();

        Auth::login($newUser);

        return redirect('dashboard');
    }
}
