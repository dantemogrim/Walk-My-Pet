<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddPetController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'pet-name'     => ['required', 'string'],
            'pet-info'     => ['required', 'string', 'max:80'],
            'pet-species'  => ['required', 'string', 'max:12'],
        ]);

        $pet = new Pet();
        $pet->owner_id = Auth::id();
        $pet->name = $request->input('pet-name');
        $pet->info = $request->input('pet-info');
        $pet->species = $request->input('pet-species');
        $pet->save();

        return redirect('dashboard');
    }
}
