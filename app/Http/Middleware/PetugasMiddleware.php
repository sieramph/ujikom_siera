<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PetugasMiddleware
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::user()->level=='petugas'){
            if ($this->auth->user()->petugas[0]->level=='admin'){
               return $next($request);
            }else{
                abort(403);
            }
            }else{
                abort(403);
            }
    }
}
