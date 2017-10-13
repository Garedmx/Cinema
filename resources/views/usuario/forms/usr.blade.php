<div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu Correo Electrónico'])!!}
</div>
<div class="form-group">
    {!!Form::label('Contraseña:')!!}
    {!!Form::password('pass',['class'=>'form-control','placeholder'=>'Ingresa tu Contraseña'])!!}
</div>
