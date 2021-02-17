<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdminLogin
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
        $admin = new Admin;
        if($admin->email != $request->session()->has('mail')) {
            return redirect('admin');
        }
        return $next($request);
    }
}
