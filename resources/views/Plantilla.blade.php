<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('css/global.css') }}" rel="stylesheet">


    <title>@yield ('Titulo')</title>

</head>
<body>
	<header>
		<div id="banner">
			<img src="{{ asset('imagenes/header/logo.png') }}" class="logo">
		</div>
		<div class="menu">
			<nav id="div_nav">
				<ul>
					<li><a href="/Carrito">🛒Carrito</a></li>
					<li><a href="{{ route('Dashboard') }}">Administrar</a></li>
					<li><img src="{{ asset('imagenes/header/logosmall.png') }}" class="avatar"></li>
					<!--Aqui va la foto de perfil del usuario-->
					<li>Nombre</li> <!--Aqui va el nombre del usuario-->
				</ul>
		</div>
		<div class="menu">
			<ul>
				<li><a href="/" id="">Tarrito Azúl</a></li>
				<li><a href="/" id="">Inicio</a></li>
				<li><a href="/Contactanos" id="">Contacto</a></li>
				<li><a href="/FAQ" id="">FAQs</a></li>
				<li><a href="/Registro" id="">Registro</a></li>
				<li><a href="/Login" id="">Login</a></li>
			</ul>
		</div>
		</nav>
	</header>

    <section>
        @yield('Contenido')
    </section>


   <footer class="grid-footer">
		<div class="footer-top-l">
			<h3>Nuestras redes sociales:</h3>
		</div>
		<div class="footer-top-r">
			<a href=""><img class="redes" src="{{ asset('imagenes/footer/facebook.png') }}"></a>
			<a href=""><img class="redes" src="{{ asset('imagenes/footer/twitter.png') }}"></a>
			<a href=""><img class="redes" src="{{ asset('imagenes/footer/instagram.png') }}"></a>
			<a href=""><img class="redes" src="{{ asset('imagenes/footer/whatsapp.png') }}"></a>
		</div>
		<ul class="footer-mid-1">
			<li>
				<h4>Nuestra compañía Rim Light Studios
					<hr>
				</h4>
			</li>
			<li>
				Somos una empresa dedicada a la creacion y desarrollo de software, implementando las mejores
				herramientas para la experiencia e interfaz de usuario
			</li>
		</ul>
		<ul class="footer-mid-2">
			<li>
				<h4>Contactos
					<hr>
				</h4>
			</li>
			<li>
				<p>311-429-2383</p>
			</li>
			<li>
				<p>Carretera Federal 200 Km 9 Xalisco, Nayarit, México., 63780 Nayarit</p>
			</li>
			<li>
				<p>tarritoazul@rimlight.com</p>
			</li>
			<hr>
		</ul>
		<ul class="footer-mid-3">
			<li>
				<h4>Obtener ayuda
					<hr>
				</h4>
			</li>
			<a href="" id="decoracion">
				<li>Seguimiento del pedido</li>
			</a>
			<a href="" id="decoracion">
				<li>Envio y entrega</li>
			</a>
			<a href="" id="decoracion">
				<li>Devoluciones</li>
			</a>
			<a href="" id="decoracion">
				<li>Opciones de pago</li>
			</a>
		</ul>

		<div class="footer-bottom">
			&copy; 2023 Copyright: Tarritoazul
		</div>

	</footer>

</body>
</html>