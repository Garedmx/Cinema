<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $table='states';
    protected $fillable=['name'];
}
