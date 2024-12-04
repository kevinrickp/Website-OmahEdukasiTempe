<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

class RedirectIfAuthenticated
{
    // Metode lain...

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/admin/login'); // Ganti dengan URL login admin
        }
        return redirect()->guest(route('login'));
    }
}