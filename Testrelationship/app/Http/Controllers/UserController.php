<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showProfile($id)
{
    $user = User::find($id);
    $profile = $user->profile;

    return view('profiles.show', compact('user', 'profile'));
}
}
