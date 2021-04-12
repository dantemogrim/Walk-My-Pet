<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeleteUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'delete-check'         => ['required'],
        ]);

        $user = Auth::user();

        DB::table('pets')->where('owner_id', '=', $user->id)->delete();
        DB::table('users')->where('id', '=', $user->id)->delete();

        Auth::logout();

        return redirect('/');
    }
}
