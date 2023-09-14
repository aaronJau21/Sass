<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role == null ? 'user' : $request->role
        ]);

        return response()->json([
            'msg' => 'Usuario Creado',
            'user' => [
                'name' => $newUser->name,
                'email' => $newUser->email
            ]
        ]);
    }
}
