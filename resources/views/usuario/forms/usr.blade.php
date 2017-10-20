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
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Contraseña'])!!}
</div>
<div class="form-group">
    {!!form::label('Ciudad:')!!}
    {!!Form::select('state',$states,null,['id'=>'state'])!!}
</div>
<div class="form-group">
    {!!Form::label('Municipio/Estado')!!}
    {!!Form::select('town',['plaseholder'=>'Selecciona'],null,['id'=>'town'])!!}
</div>
