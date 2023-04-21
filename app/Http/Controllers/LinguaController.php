<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LinguaController extends Controller
{
    public function showLogin()
    {
        return view("login");
    }

    public function validateLogin( Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $user = User::where('email', '=', $email, 'and')->where('password', '=', $password)->get();
        if(isset($user[0])) {
            session(['user' => $email]);
            return redirect(route('menu'));
        }
        else {
            return redirect(route('showLogin'));
        }
    }

    public function showRegister()
    {
        return view("register");
    }

    public function validateRegister(Request $request)
    {
        $email = $request['email'];
        $aux = User::where('email', intval($email))->get();
        $userExistente = $aux[0];
        if($userExistente['email'] != $email){
            $users = new User;
            $users->email = $request['email'];
            $users->password = $request['password'];
            $users->name = $request['nom'];
            $users->natiu = $request['natiu'];
            $users->aaprendre = $request['apracticar'];
            $users->save();
            return redirect(route('showLogin'));
        }
        else{
            return view('errorRegister');
        }
    }

    public function menu()
    {
        $email = session('user');
        $aux = User::where('email', intval($email))->get();
        $userExistente = $aux[0];
        if (session()->has('user')){
            return view('menu', ['user' => $userExistente]);
        }
        else{
            return redirect(route('showLogin'));
        }
    }

    public function veurePersones()
    {
        $email = session('user');
        $aux = User::where('email', intval($email))->get();
        $userExistente = $aux[0];
        if (session()->has('user')){
            $usersCompatibles = User::where('natiu', '=', $userExistente['aaprendre'], 'and')->where('aaprendre', '=', $userExistente['natiu'])->get();
            return view('veurePersones', ['user' => $userExistente, 'usersCompatibles' => $usersCompatibles]);
        }
        else{
            return redirect(route('showLogin'));
        }

    }

    public function eliminarUsuari()
    {
        $email = session('user');
        $aux = User::where('email', intval($email))->get();
        $userExistente = $aux[0];
        $id = $userExistente['id'];
        $user = User::findOrFail($id);
        session()->forget('user');
        $user->delete();
        return redirect(route('showLogin'));
    }

    public function destroySession()
    {
        session()->forget('user');
        return redirect(route('showLogin'));
    }
}
