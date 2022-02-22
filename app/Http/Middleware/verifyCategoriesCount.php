<?php

namespace App\Http\Middleware;

use Closure;
use App\category;

class verifyCategoriesCount
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
        if(Category::all()->count() == 0){
            
            session()->flash('error', 'You need to add category to be able to add a candidate vote');
          
            return redirect(route('categories.create'));
        }

        return $next($request);
    }
}
