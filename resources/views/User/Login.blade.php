<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@extends('Plantilla')
@section('Contenido')
    <form method="post" action="{{ route('Login') }}">
        @csrf

        <div class="formulario">
            <div class="seccion-narrow">
                <div class="logo_fondo">
                    <img class="form_logo" src="{{ asset('imagenes/logosmall_nobg.png') }}" />
                </div>

                <h1 class="titulo">Iniciar sesión</h1>
                <table>
                    <tr>
                        <td>
                            <span class="txt">Usuario:</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="input" type="textbox" name="NombreUsuario"><br>
                            {!! $errors->first('NombreUsuario', '<small>:message</small><br>') !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="txt">Contraseña:</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="input" type="password" name="Contraseña"><br>
                            {!! $errors->first('Contraseña', '<small>:message</small><br>') !!}
                        </td>
                    </tr>
                </table>

                <button ID="BtLogin" class="btn btn-primario">Iniciar sesión</button>
                <p style="font-size: 12pt;" class="centrar">
                    ¿Aún no tienes una cuenta?
                    <a ID="linkIniciarSecionForm" href="{{ route('Registro.store') }}">Regístrate aquí</a>
            </div>
        </div>
    </form>
@endsection
