<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class EnsureAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('user_admin')) {
            $user_admin = Session::get('user_admin');

            if ($user_admin->id_loai_user >= 5) {
                return $next($request);
            } else {
                return redirect('/login-admin');
            }
        }

        return redirect('/login-admin');
    }
}
