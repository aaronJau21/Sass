<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $validateUser = $request->validated();

        if (!Auth::attempt($validateUser)) {
            return response()->json([
                'msg' => 'Credenciales invalidas'
            ], 401);
        }


        $user = Auth::user();

        return response()->json([
            'msg' => 'Bienvenido',
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ]);
    }
}
