<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Movie extends Model
{
    //
    //protected $table= "movies"; //esto no es necesario ya que asume que la tabla es igual a modelo
    
    protected $fillable=['genre_id','name','cast','direction','duration','path'];
    
    public function setPathAttribute($path){
        if(!empty($path))
        {
            $name=Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path']= Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name,\File::get($path));
        }
    }
    
    public static function Movies(){
        return DB::table('movies')
                ->join('genres','genres.id','=','movies.genre_id')
                ->select('movies.*','genres.genre')
                ->get();
    }
}
