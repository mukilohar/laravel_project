<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $para=null)
    {
        $response =  $next($request);

        if($request->id >= 200){

           //echo $para;die;
            //return redirect('welcome');
            
        }
        return $response;
    }

    public function terminate($request, $response)
    {
        //  
    }
}
