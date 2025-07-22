<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class CheckTokenExpiration
{
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if ($request->bearerToken()) {
    //         $token = PersonalAccessToken::findToken($request->bearerToken());

    //         if ($token && !$token->isValid()) {
    //             return response()->json([
    //                 'message' => 'Token has expired'
    //             ], 401);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        if ($request->bearerToken()) {
            $token = \Laravel\Sanctum\PersonalAccessToken::findToken($request->bearerToken());

            // Ganti $token->isValid() dengan:
            if ($token && $token->expired_at && now()->gt($token->expired_at)) {
                return response()->json(['message' => 'Token expired'], 401);
            }
        }

        return $next($request);
    }
}
