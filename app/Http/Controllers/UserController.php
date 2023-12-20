<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashBoard()
    {
        $userInfo = User::whereNotIn('id', [auth()->user()->id])->get();
        return view('dashboard', ['UserInf' => $userInfo]);
    }
}
