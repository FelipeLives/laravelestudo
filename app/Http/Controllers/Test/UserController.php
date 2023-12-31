<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $users;
    }
    public function show($id)
    {
        $users = User::findOrFail($id);
        return $users;
    }
}
