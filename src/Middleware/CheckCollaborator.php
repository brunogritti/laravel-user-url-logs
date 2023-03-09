<?php

namespace Clubecasa\Http\Middleware;

use Closure;

class LogURL
{
    public function handle($request, Closure $next)
    {    
        return $next($request);
    }

    public function terminate($request, $response)
    {

        //$response = $next($request);

        if(auth()->user()) {
            Brunogritti\UserUrlLogs\Models\UserUrlLog::create([
                'user_id' => auth()->id(),
                'url' => request()->fullUrl(),
                'method' => request()->getMethod(),
                'status_code' => $response->getStatusCode(),
            ]);
        }

        //return $response;
    }
}
