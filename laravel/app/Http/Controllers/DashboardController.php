<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // LOGGED IN USER'S DATA

        // Retrieves currently logged in user.
        $currentUser = Auth::user();

        // Retrieves the logged in user's pets.
        $usersPets = DB::table('pets')
            ->where('owner_id', $currentUser->id)
            ->get();

        //-------------------------------------------------

        // LOGGED IN DATA FOR ALL USERS - COLLECTED.

        // Retrieves all users from users table.
        $allUsers = DB::table('users')->get();
        // Attaches our users table with its relationship to our pets table.
        $allUsers = User::with('pets')->get();

        return view('dashboard', [
            'currentUser' => $currentUser,
            'usersPets'   => $usersPets,
            'allUsers'    => $allUsers,

        ]);
    }
}
