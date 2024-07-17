<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegisteredUserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=> ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return to_route('login')->with('status', 'Cuenta creada con exito');
    }
}
