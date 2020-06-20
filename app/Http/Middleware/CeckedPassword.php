<?php

namespace App\Http\Middleware;

use Closure;

class CeckedPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //API_PASSWORD

        if($request->api_password != env('API_PASSWORD','7rQVyVxnrmwiBNjnn5z06IGyNbKo'))
        {
            return response()->json(['message'=>'UnAuthentecated']);
        }
        return $next($request);
    }
}
