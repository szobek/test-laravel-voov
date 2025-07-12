<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('list-users', compact('users'));
    }

    public function create()
    {
        return view('create-user');
    }


}
