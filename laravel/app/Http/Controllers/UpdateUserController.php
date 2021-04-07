<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateUserController extends Controller
{

    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name'         => ['required', 'string', 'max:12'],
            // 'email'        => ['required', 'email', 'unique:users,email'],
            // 'password'     => ['required', 'string', 'min:3'],
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
    }
}

// $user->update($request->all());

// $user = new User();
// $user->neighborhood = $request->input('neighborhood');
// $user->phone = $request->input('phone');
// $user->info = $request->input('info');
