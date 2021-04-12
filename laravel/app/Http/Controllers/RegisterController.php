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
            'name'         => ['required', 'string', 'min:2'],
            'email'        => ['required', 'email', 'unique:users,email', 'min:4'],
            'password'     => ['required', 'string', 'min:3'],
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
    }
}
