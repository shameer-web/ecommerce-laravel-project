<?php

namespace App\Http\Middleware;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Cache;
use Carbon\Carbon;

use Closure;

class UserMiddleware
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
        

       if(Auth::check() && Auth::user()->isban)
        {
          $banned =Auth::user()->isban == '1';
          Auth::logout();

           if($banned == 1) 
           {
            $message ="Your Account has been banned . Please contact Administrator";
           }

           return redirect()->route('login')
               ->with('status',$message)
               ->withErrors(['email'=>'Your Account has been banned . Please contact Administrator']);
        }


      if(Auth::check())
      {
        $expireAt = Carbon::now()->addMinutes(1);
        Cache::put('user-is-online'. Auth::user()->id,true,$expireAt);
      }
        return $next($request);
      }
    


}
