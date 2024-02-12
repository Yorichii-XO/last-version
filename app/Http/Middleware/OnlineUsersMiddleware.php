<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class OnlineUsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $onlineUsers = Cache::get('online-users', []);

        // Add the current user to the online users list if authenticated
        if (Auth::check()) {
            $user = auth()->user();
            $onlineUsers[$user->id] = $user;
            Cache::get('online-users', $onlineUsers);
            session(['onlineUsers' => $onlineUsers]);
        }

        $response = $next($request);

        // Remove the user from the online users list when they are not authenticated
       // ...

// Remove the user from the online users list when they are not authenticated or logged out
if (!Auth::check() || session('loggedOut')) {
    $user = session('onlineUsers')[auth()->id()] ?? null;

    if ($user && method_exists($user, 'getRememberToken') && $user->getRememberToken() === null) {
        unset($onlineUsers[$user->id]);
        Cache::get('online-users', $onlineUsers);
        session(['onlineUsers' => $onlineUsers]);
    }
}

// ...

        return $response;
    }
}