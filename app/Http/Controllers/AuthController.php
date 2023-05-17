<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(Request $request){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login_action(Request $request){

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // dd($validator);
        if(Auth::attempt($validator)){
            return redirect()->route('home');
        }

    }

    public function register(Request $request){

        $isLoggedIn = Auth::check();

        //outra forma de checar se existe usuario
        if($isLoggedIn){
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(Request $request){

        /**
         * Regras para registro
         *  - o usuario tem que ter um nome
         * o email tem que ser unico na tabela users
         * todos os campos são REQUIRED
         * password tem que ter no minimo 6 caracteres
         */

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=> 'required|min:6|confirmed'
        ]);

        $data = $request->only('name', 'email', 'password');

        $data['password'] = Hash::make($data['password']);

        $userCreated = User::create($data);


        return redirect(route('login'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
