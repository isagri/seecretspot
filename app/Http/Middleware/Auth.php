<?php

namespace App\Http\Middleware;

use Closure;


class Auth
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

        if (auth()->guest()) {

            return redirect('/login')->withErrors([
                'user_name' => 'Vous devez être connecté pour accéder à cette page.',
            /*$errors = $validator->errors('Vous devez être connecté pour accéder à cette page.');
            echo $errors->first('user_name');*/

            ]);
        }

        return $next($request);
    }
}
