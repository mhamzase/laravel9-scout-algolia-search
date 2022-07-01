<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $users = User::search($request->get('search'))->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        return view('index', compact('users'));
    }
}
