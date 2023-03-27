@extends('Plantilla')
<link href="{{ asset('css/catalogo.css') }}" rel="stylesheet">
@section('Contenido')
    <!-- Productos ----------------------------------- -->
    <section class="catalogo">
        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/arete01.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Waflitos</h1>
            <p class="price">$299</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>

        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/arete02.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Molcajetes</h1>
            <p class="price">$299</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>

        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/arete03.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Sandías</h1>
            <p class="price">$299</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>

        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/arete04.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Ranita</h1>
            <p class="price">$299</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>

        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/arete05.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Limónes</h1>
            <p class="price">$299</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>

        <div class="card">
            <img class="imagen" src="{{ asset('imagenes/producto/placeholder.jpg') }}" style="width: 100%" />
            <h1 class="nombre">Nuevo</h1>
            <p class="price">$0.00</p>
            <p class="descripcion">Pack de 4 aretes con forma de wafles con moras y fresas</p>
            <button class="boton">Añadir al carrito</button>
        </div>
    </section>
    <!-- Productos ----------------------------------- -->
@endsection

</body>

</html>