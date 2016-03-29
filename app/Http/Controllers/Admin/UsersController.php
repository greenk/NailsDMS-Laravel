<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    /**
     * Show all the current employee
     */
    public function index()
    {
        $users = User::all();

        return view('backend.users.index', compact('users'));
    }
}
