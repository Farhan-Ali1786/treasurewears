<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class UserCheck
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
        // session()->forget("user");

        // dd("reaching");
        $user = session()->get('user');
        if ( isset($user) ) {
            view()->share('user',$user);
            $request->merge(compact('user'));
        }
        if ($request->path() !='/' && !isset($user) ) {
            return redirect('/');
        }
        if ($request->path()=="/" && isset($user) ) {
            return back();
        }
        return $next($request);
    }
}
