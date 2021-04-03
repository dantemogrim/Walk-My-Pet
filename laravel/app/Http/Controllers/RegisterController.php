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
            'name'         => ['required', 'string', 'max:18', 'unique:users,name'],
            'email'        => ['required', 'email', 'unique:users,email'],
            'password'     => ['required', 'string', 'min:3'],
            'phone'        => ['integer', 'min:10'],
            'neighborhood' => ['string', 'max: 24'],
            'pet_walker'   => ['required', 'string', 'max:3'],
            'pet_owner'    => ['required', 'string', 'max:3'],

        ]);

        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->phone = $request->input('phone');
        $newUser->neighborhood = $request->input('neighborhood');
        $newUser->pet_owner = $request->input('pet_owner');
        $newUser->pet_walker = $request->input('pet_walker');
        $newUser->save();

        Auth::login($newUser);

        return redirect('dashboard');
    }
}

// Neighborhood fungerar
