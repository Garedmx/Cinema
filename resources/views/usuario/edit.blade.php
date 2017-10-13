@extends('layouts.admin')

@section('content')
    @include('alerts.request')
    {!!Form::Model($user,['route'=>['usuario.update',$user->id], 'method'=>'PUT'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
    {!!Form::Close()!!}
    
    {!!Form::Open(['route'=>['usuario.destroy',$user->id], 'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::Close()!!}
@stop