@extends('layouts.principal')

@section('content')
@include('alerts.success')
@include('alerts.errors')
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
            {!!Form::open(['route'=>'password.email','method'=>'POST'])!!}
                <div class="col-md-6 contact-left">
                    
                    {!!Form::text('email',null,['placeholder'=>'Email:'])!!}
                </div>
                
                {!!Form::submit('Enviar Link')!!}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@stop