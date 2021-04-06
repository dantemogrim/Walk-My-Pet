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
            'pet-name' => ['required', 'string'],
            'pet-info' => ['required', 'string', 'max:80'],
            'pet-species'  => ['required', 'string', 'max:12']
        ]);

        $pet = new Pet();
        $pet->owner_id = Auth::id();
        $pet->name = $request->input('pet-name');
        $pet->info = $request->input('pet-info');
        $pet->species = $request->input('pet-species');
        // $pet->profile_img = $request->input('pet-img');
        $pet->save();


        return redirect('dashboard');
    }
}

//<?php

// namespace App\Http\Controllers;

// use App\Models\Pet;
// use Illuminate\Http\Request;

// class EditPetController extends Controller
// {
//     public function __invoke(Request $request)
//     {
//         $this->validate($request, [
//             'name'    => ['required', 'string', 'min:2'],
//             'species' => ['required', 'string'],
//             'info' => ['required', 'string']

//         ]);

//         $newPet = new Pet();
//         $newPet->name = $request->input('name');
//         $newPet->info = $request->input('info');

        // $newPet->save(); -->

        //Auth::login($newUser);

//         return redirect('/');
//     }
// }
