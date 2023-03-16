@extends('Plantilla')
@section('Contenido')
<form method="post" action="{{route('Login')}}">
	@csrf
	<h1>Iniciar sesión</h1>
	<div>
		Usuario: <br><br> <input type="textbox" name="NombreUsuario"><br>
		{!! $errors->first('NombreUsuario','<small>:message</small><br>')!!}
	</div>
	<div>
		Contraseña:<br><br> <input type="password" name="Contraseña"><br>
		{!! $errors->first('Contraseña','<small>:message</small><br>')!!}
	</div>

	<br><br><button>Iniciar sesión</button>

	<p>¿Aún no tienes una cuenta?</p><a href="/Registro">Regístrate aquí</a><br>
	
	
	 
	
</form>
@endsection