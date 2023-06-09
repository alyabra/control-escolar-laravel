<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerBoletaEstudiante
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->route()->user->id === auth()->user()->id);
        // TODO, una forma más simple de obtener el valor dinamico de la url
        if($request->route()->user == auth()->user()->id ||  (auth()->user()->rol == 1))
        {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
