<?php

namespace App\Http\Middleware\Subscription;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNoTeamPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
           if (auth()->user()->HasTeamNotSubsciption()){
               return redirect()->route('account.index');
           }
        return $next($request);
    }
}
