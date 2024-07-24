<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->paginate(5); // have used 5 for now and name alphabetic ascending
        return view('admin.users.index', compact('users'));
    }
}
