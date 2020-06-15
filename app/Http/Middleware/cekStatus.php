<?php

namespace App\Http\Middleware;

use Closure;

class cekStatus
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
        $user = \App\User::where('email',$request->email)->first();
        if($user->status == 'admin'){
            return redirect('/admin/request');
        }elseif ($user->status == 'user'){
            return redirect('/informasi');
        }
        return $next($request);
    }
}
