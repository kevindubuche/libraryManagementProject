<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class GestionnnaireOuBibliothecaire
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
        $user = User::find(auth()->user()->id);
        if($user->role == 0 || $user->role == 1)// check if it's a gestionnaire ou biblothecaire !!!
        {
            return $next($request);
        }
        return redirect(route('login'));
      
    }
}
