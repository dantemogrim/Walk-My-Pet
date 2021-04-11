<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateUserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->info = $request->input('info');
        $user->neighborhood = $request->input('neighborhood');
        $user->pet_owner = $request->input('pet-owner');
        $user->pet_walker = $request->input('pet-walker');
        $user->save();

        return redirect('dashboard');
    }
}

//Testing
// class UpdateUserController extends Controller
// {
//     public function __invoke(Request $request)
//     {
//         $user = Auth::user();
//         $user->name = $request->input('name');
//     }
// }

// $user->update($request->all());

// $user = new User();
// $user->neighborhood = $request->input('neighborhood');
// $user->phone = $request->input('phone');
// $user->info = $request->input('info');

//Test
// class UpdateUserController extends Controller
// {
//     public function edit()
//     {

//         if (Auth::user()) {
//             $user = User::find(Auth::user()->id);

//             if ($user) {
//                 return view('edit-user');
//             } else {
//                 return redirect()->back();
//             }
//         } else {
//             return redirect()->back();
//         }
//     }

//     public function update(Request $request)
//     {
//         $user = User::find(Auth::user()->id);

//         if ($user) {
//             $user->name = $request['name'];

//             $user->save();
//         } else {
//             return redirect()->back();
//         }
//     }
// }
