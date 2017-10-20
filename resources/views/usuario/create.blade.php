@extends('layouts.admin')

@section('content')
    @include('alerts.request')
    {!!Form::Open(['route'=>'usuario.store', 'method'=>'POST'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
    {!!Form::Close()!!}
@endsection

@section('scripts')
   {!!Html::script('js/dropdown.js')!!}
@endsection