<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->input('token', null);
        \Illuminate\Support\Facades\Log::channel('debug')->info('TOKEN', [$token]);

        if (!$token || $token !== config('app.token')) {
            return response()->json([
                'success' => false,
                'message' => 'Empty token or invalid token'
            ], 401);
        }

        return $next($request);
    }
}
