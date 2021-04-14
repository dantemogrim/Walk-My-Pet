<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->info = $request->input('info');
        $user->neighborhood = $request->input('neighborhood');
        $user->pet_owner = $request->input('pet-owner');
        $user->pet_walker = $request->input('pet-walker');
        $user->save();

        return redirect('dashboard');
    }
}
