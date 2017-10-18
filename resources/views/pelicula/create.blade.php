@extends('layouts.admin')

@section('content')
    {!!Form::open(['route'=>'pelicula.store','method'=>'POST','files'=>true])!!}
        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>  
        <strong>Pelicual Agregada Correctamente</strong>
        </div>

        <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
            <button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>  
            <strong id="msj"></strong>
        </div>
        @include('pelicula.forms.peli')
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop

