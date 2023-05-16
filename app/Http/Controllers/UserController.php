<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }

    public function create()
    {
        $users = $this->objUser->all();
        return view('user/create', compact('users'));
    }

    public function store(Request $request)
    {
        $newUser = $this->objUser->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'wallet' => 0.00
        ]);

        if($newUser != null)
        {
            return redirect('/');
        }
    }

    public function login()
    {
        $users = $this->objUser->all();
        return view('user/login', compact('users'));
    }

    public function show(string $id)
    {
        $user = $this->objUser->findOrFail($id);
        return view('user/show', compact('user'));
    }
}