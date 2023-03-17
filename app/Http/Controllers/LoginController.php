<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('auth_token')->plainTextToken;
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function getUsers(Request $request)
    {
        $data = User::all();

        return response()->json(['users' => $data]);
    }

    public function logout(Request $request)
    {
        $check = session()->flush();

        if ($check) {
            return response()->json([
                'status' => true,
                'message' => 'berhasil logout'
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'gagal logout'
        ]);
    }
}