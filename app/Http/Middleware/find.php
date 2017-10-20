<?php

namespace Cinema\Http\Middleware;
use Closure;
use Cinema\Movie;
use Illuminate\Http\Request;
use Cinema\Http\Controllers\Controller;

class find extends Controller
{
    protected $movie;
    
    public function __construct(Movie $movie) {
        $this->movie = $movie;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        $this->movie= Movie::find($request->pelicula);
        $this->notFound($this->movie);
        
        return $next($request);
    }
}
