<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Original
class UpdateUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name'         => ['required', 'string', 'max:12'],
            // 'email'        => ['required', 'email', 'unique:users,email'],
            // 'password'     => ['required', 'string', 'min:3'],
        ]);




        // DB::table('users')
        //     ->updateOrInsert(
        //         ['name' => 'john@example.com', 'email' => ''],
        //         // ['votes' => '2']
        //     );

        $user = Auth::user();
        $user->name = $request->input('name');
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
