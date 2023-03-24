<link href="{{ asset('css/producto.css') }}" rel="stylesheet">
@extends('Plantilla')
@section('Contenido')
    <form method="post" src="{{ route('Producto.store') }}">
        @csrf
        <section class="formulario">
            <div class="add_product">
                <h2 class="titulo">Añadir producto</h2>
                <div class="item1">
                    <div class="nombre">
                        <p>Nombre:</p>
                        <input name="tbNombre" class="input"></input>
                    </div>
                    <div class="descripcion">
                        <p>Descripcion:</p>
                        <input name="tbDescripcion" class="input_descripcion" TextMode="MultiLine"></input>
                        <br />
                    </div>
                </div>

                <div class="item2">

                    <div class="precio">
                        <p>Precio:</p>
                        <input name="tbPrecio" class="input"></input>
                    </div>

                    <div class="cantidad">
                        <p>Cantidad:</p>
                        <input type="number" name="tbCantidad" class="input" TextMode="Number" Text="1"></input>
                    </div>

                    <div class="disponibilidad">
                        <p>Disponibilidad:</p>
                        <select name="ddlDisponibilidad" id="ddlCategoria">
                            <option value="Disponible">Disponible</option>
                            <option value="Agotado">Agotado</option>
                            <option value="Oculto">Oculto</option>
                        </select>
                    </div>

                    <div class="categoria">
                        <p>Categoria:</p>
                        <select name="ddlCategoria" id="ddlCategoria">
                            <option value="Arete">Arete</option>
                            <option value="Pulcera">Pulcera</option>
                            <option value="Collar">Collar</option>
                            <option value="Llavero">Llavero</option>
                        </select>
                    </div>

                    <div class="etiquetas">
                        <p>Etiquetas:</p>
                        <input name="tbEtiquetas" class="input" TextMode="MultiLine"></input>
                    </div>
                </div>
                <div class="file_up">
                    <h2 class="titulo">Imagenes</h2>
                    <input type="file" ID="FileUpload_Control" AllowMultiple="true" />
                    <br />
                    <asp:Label ID="FileUpload_Msg" Text=""></asp:Label>
                </div>
            </div>


            <div class="botones">
                <button ID="btnGuardar" class="btn btn-primario btnGuardar" OnClick="btnGuardar_Click" />Guardar</button>
            </div>

        </section>
    </form>
@endsection
