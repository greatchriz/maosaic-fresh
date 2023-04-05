<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request, User $user)
    {
        $authUser = $request->user();

        $this->authorize('viewAny', User::class);

        return view('users.index', [
            'users' => User::paginate(10)
        ]);
    }
}
