	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,
		['class'=>'form-control',
		'placeholder'=>'Ingrese el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('correo','Correo:')!!}
		{!!Form::text('email',null,
		['class'=>'form-control',
		'placeholder'=>'Ingrese el correo'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('contraseña','Password:')!!}
		{!!Form::text('password',null,
		['class'=>'form-control',
		'placeholder'=>'Ingrese la contraseña'])!!}
	</div>
