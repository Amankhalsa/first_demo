<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class empty_input
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {




           if($request->get('name')=="")
            // echo "<h1>Condition is true</h1>";

            return redirect()->back()->with('error', 'Please enter full detail');

            
        else

            return $next($request);
       
    }
}
