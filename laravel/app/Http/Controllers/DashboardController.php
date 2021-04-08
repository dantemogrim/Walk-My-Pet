<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        $allUsers = DB::table('users')->get();
        $allPets = DB::table('pets')->get();

        return view('dashboard', [
            'user' => $user,
            'allUsers' => $allUsers,
            'allPets' => $allPets,

        ]);
    }
}
