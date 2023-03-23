<link href="{{ asset('css/registro.css') }}" rel="stylesheet">
@extends('Plantilla')
@section('Contenido')
<section class="registro_box">
<div class="logo_fondo">
	<img class="logo" src="{{ asset('imagenes/header/logo.png') }}"/>
</div>
<form method="post" action="{{route('Registro.store')}}">
	@csrf
	<h1>Crear una cuenta</h1>
		<div>
			Nombre de usuario:<br><input type="textbox" name="tbNombre"><br>
			{!! $errors->first('NombreUsuario','<small>:message</small><br>')!!}
		</div>
		<div>
			Email:<br><input name="tbEmail"><br>
			{!! $errors->first('Email','<small>:message</small><br>')!!}
		</div>
		<div>
			Confirmar Email:<br><input name="ConfirmarEmail"><br>
			{!! $errors->first('ConfirmarEmail','<small>:message</small><br>')!!}
		</div>
		<div>
			Contraseña:<br><input type="passwod" name="tbPassword"><br>
			{!! $errors->first('Contraseña','<small>:message</small><br>')!!}
		</div>
		<div>
			Confirmar Contraseña:<br> <input type="password" name="ConfirmarContraseña"><br>
			{!! $errors->first('ConfirmarContraseña','<small>:message</small><br>')!!}

		</div>
		
		<br>
		<input type="checkbox" name="Check">Acepto las condiciones de uso y el aviso de privacidad
		<div>
			<br>
			<button class="btn btn-primario">Registrarse</button>
		</div>
		<br>¿Ya tienes una cuenta?<a href="{{ route('/') }}">Inicia sesión aquí</a><br>   
</form>
</section>

@endsection