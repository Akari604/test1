<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
     public function index()
    {
      return view('admin');
    }

    public function create(AuthRequest $request)
    {
        $auth = $request->only(['name', 'email', 'password']);
        
        return view('register', compact('auth'));
    }

    public function store(Request $request)
    {
        $auth =$request->only(['name', 'email', 'password']);
        Auth::create($auth);
        return view('login');
    }
}
