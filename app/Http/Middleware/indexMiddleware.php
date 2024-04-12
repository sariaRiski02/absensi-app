<?php

namespace App\Http\Middleware;

use App\Models\group;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class indexMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUrl = $request->url();
        $explodeUrl = explode('/', $currentUrl);
        $lastUrl = last($explodeUrl); // get the last url


        $user_id = Auth::user()->id;
        $group = group::where('id_user', $user_id)->pluck('id')->toArray();
        if (!in_array($lastUrl, $group)) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
