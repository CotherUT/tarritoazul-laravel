@extends('Plantilla')
@section('Contenido')
<form method="post" action="{{route('Registro')}}">
	@csrf
	<h1>Crear una cuenta</h1>
		<div>
			Nombre de usuario:<br><br><input type="textbox" name="Nombre"><br>
			{!! $errors->first('NombreUsuario','<small>:message</small><br>')!!}
		</div>
		<div>
			Email:<br><br><input name="Email"><br>
			{!! $errors->first('Email','<small>:message</small><br>')!!}
		</div>
		<div>
			Confirmar Email:<br><br><input name="ConfirmarEmail"><br>
			{!! $errors->first('ConfirmarEmail','<small>:message</small><br>')!!}
		</div>
		<div>
			Contraseña:<br><br><input type="password" name="Contraseña"><br>
			{!! $errors->first('Contraseña','<small>:message</small><br>')!!}
		</div>
		<div>
			Confirmar Contraseña:<br><br> <input type="password" name="ConfirmarContraseña"><br>
			{!! $errors->first('ConfirmarContraseña','<small>:message</small><br>')!!}

		</div>
		
		<br>
		<input type="checkbox" name="Check">Acepto las condiciones de uso y el aviso de privacidad
		<div>
			<br><br><button>Registrarse</button>
		</div>
		<br>¿Ya tienes una cuenta?<a href="/Login">Inicia sesión aquí</a><br>   
</form>

@endsection