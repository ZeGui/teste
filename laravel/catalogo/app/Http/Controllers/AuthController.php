<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function authenticate(LoginRequest $request){
        $data = $request->all();
        if(Auth::attempt($data))
        {
            // if(1 == $data->tipo){
            return view('questoes.listar', compact('questoes'));
            // }
        }else 
        {
            return view("auth.login");
        }
    }

    public function storeUser(Request $request)
    {
        $request->flash();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'tipo' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $u = User::create($data);

        return redirect('/login');
    }

}
