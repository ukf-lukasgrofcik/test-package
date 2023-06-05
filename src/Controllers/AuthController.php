<?php

namespace Lukasgrofcik\Package\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request) : Response
    {
        $credentials = $request->only([ 'email', 'password' ]);

        if ( auth()->attempt($credentials) ) {
            return response([
                'message' => 'You have been logged in.',
                'token' => $request->user()->createToken('auth')->plainTextToken,
            ]);
        }

        return response([
            'message' => 'User not found or password wrong.',
        ]);
    }

    public function logout(Request $request) : Response
    {
        auth()->logout();

        return response([
            'message' => 'You have been logged out.',
        ]);
    }

    public function user() : Response
    {
        return response([
            'user' => auth()->user() ?? 'No user',
        ]);
    }

}
