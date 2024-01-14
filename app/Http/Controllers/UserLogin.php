<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use JWTAuth;
use Auth;



class UserLogin extends Controller
{
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function store(Request $request)
    {

     User::create([
            'name' => 'name',
            'email' => 'email',
            'password' => Hash::make('password'),
        ]);
        return response()->json('lol');
    }

    public function user()
    {

     $t = Auth::user();
        return response()->json(['Vous avez pu voir l\'impossible 13'=>$t]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ( ! $token = JWTAuth::attempt($credentials)) {
                return response([
                    'status' => 'error',
                    'error' => 'Mot de passe ou email non valide',
                    'msg' => 'Mot de passe ou email non valide.'
                ], 400);
        }
        return response([
                'status' => 'success',
                'token' => $token
            ]);
    }

}
