<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return JsonResponse|void
     */
    public function handle(Request $request, Closure $next)
    {
        $jwt = $request->bearerToken();
        if ($jwt != 'null' && $jwt != '') {
            $jwtDecoded = JWT::decode($jwt, new Key(env('JWT_SECRET_KEY'), 'HS256'));
            if ($jwtDecoded->role == 'admin') {
                return $next($request);
            }
        }
        return response()->json([
            'msg' => 'Akses di tolak, token tidak memenuhi'
        ], 401);
    }
}
