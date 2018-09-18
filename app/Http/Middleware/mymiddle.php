<?php

namespace App\Http\Middleware;

use Closure;

class mymiddle
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
        if($request->user == 'syaikhul'){
            return redirect('nama/Syaikhul');
        }
        return redirect('nama/Error Harus Menggunakan syaikhul');

    }
}
