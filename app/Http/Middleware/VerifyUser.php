<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyUser
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

        // if($request->get('name')=="aman")
        //     // echo "<h1>Condition is true</h1>";
        //     return $next($request);
            
        // else
        //     return redirect('/my_test');


        //     // return back();

        //     // echo 'name incorrect';


        if($request->get('gender')=="")
            // echo "<h1>Condition is true</h1>";
            return redirect('/valid');

            
        else

            return $next($request);


    }

}
