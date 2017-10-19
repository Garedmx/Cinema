@extends('layouts.principal')

@section('content')
@include('alerts.success')
 @include('alerts.errors')
 @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
 @endif
<div class="review-content">
    <div class="top-header span_top">
        <div class="logo">
            <a href="{!!URL::to('/')!!}"><img src="images/logo.png" alt="" /></a>
            <p>Movie Theater</p>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="main-contact">
        <h3 class="head">Reset Password</h3>
        <p>WE'RE ALWAYS HERE TO HELP YOU</p>
        <div class="contact-form">
            {!!Form::open(['route'=>'password.request','method'=>'POST'])!!}
                <div class="col-md-6 contact-left">
                    {!!Form::hidden('token',$token,null)!!}
                    
                    {!!Form::text('email',null,['value'=>"{{old('email')}}",'placeholder'=>'Email:'])!!}
                    
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Nueva Contraseña:'])!!}
                    {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirma tu Nueva Contraseña:'])!!}
                </div>
                
                {!!Form::submit('Reiniciar Password')!!}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
