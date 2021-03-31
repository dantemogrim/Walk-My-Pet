<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateTaskController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string|min:10',
        ]);

        $task = new Task();
        $task->description = $request->input('description');
        $task->user_id = Auth::id();
        $task->save();

        return back();
    }
}
