<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class AddPetController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:1'],
            'species' => ['required', 'string'],
            // Not needed for db input

        ]);

        $newPet = new Pet();
        $newPet->name = $request->input('name');
        $newPet->info = $request->input('info');

        $newPet->save();

        //Auth::login($newUser);

        return redirect('dashboard');
    }
}
