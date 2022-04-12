<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }else{
            $validated = $validator->validated();
            if (Auth::attempt($validated)) {
                $payload = [
                    'name' => 'Administrator',
                    'role' => 'admin',
                    'iat' => Carbon::now()->timestamp,
                    'exp' => Carbon::now()->timestamp + 60 * 60 * 2
                ];

                $token = JWT::encode($payload, env('JWT_SECRET_KEY'), 'HS256');

                return response()->json([
                    'msg' => 'Token berhasil di buat',
                    'data' => 'Bearer ' . $token
                ], 200);
            } else {
                return response()->json([
                    'msg' => 'Email atau Password salah'
                ], 422);
            }
        }
    }
}
