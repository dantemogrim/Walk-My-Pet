<?php

declare(strict_types=1);

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
            'name'            => ['required', 'string', 'min:2'],
            'email'           => ['required', 'email', 'unique:users,email', 'min:4'],
            'password'        => ['required', 'string', 'min:3'],
            'password-verify' => ['required', 'string', 'same:password'],
        ]);

        $user = new User();
        $user->neighborhood = $request->input('neighborhood');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->info = $request->input('info');
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('dashboard');

        //TIS6APRIL
        // $this->validate($request, [
        //     'name'         => ['required', 'string', 'max:18', 'unique:users,name'],
        //     'email'        => ['required', 'email', 'unique:users,email'],
        //     'password'     => ['required', 'string', 'min:3'],
        //     'password-verify' => ['required', 'string', 'same:password'],
        //TIS6APRIL

        // 'phone'        => ['integer', 'min:10'],
        // 'neighborhood' => ['string', 'max: 24'],
        // 'pet_walker'   => ['required', 'string', 'max:3'],
        // 'pet_owner'    => ['required', 'string', 'max:3'],

        // Commented inputs in Edit instead.
        // ]);
        //TIS6APRIL

        //TIS6APRIL
        // $newUser = new User();
        // $newUser->name = $request->input('name');
        // $newUser->email = $request->input('email');
        // $newUser->password = Hash::make($request->input('password'));
        //TIS6APRIL
        // $newUser->phone = $request->input('phone');
        // $newUser->neighborhood = $request->input('neighborhood');
        // $newUser->pet_owner = $request->input('pet_owner');
        // $newUser->pet_walker = $request->input('pet_walker');
        //TIS6APRIL
        // $newUser->save();

        // Auth::login($newUser);

        // return redirect('dashboard');
        //TIS6APRIL
    }
}

// Kommenterat ut det som inte används just nu. Confirm password fungerar med
// inget meddelande just nu.
