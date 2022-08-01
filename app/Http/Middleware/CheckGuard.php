<?php

namespace App\Http\Middleware;

use App\Models\SystemDomain;
use Closure;
use Illuminate\Http\Request;

class CheckGuard
{

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $host = $request->header('host');
        $domain = SystemDomain::where('domain', $host)->first();
        if ($domain instanceof SystemDomain) {
            $guard = $domain->type;
            $request->attributes->add(['guard' => $guard]);
        }
        return $next($request);
    }
}
