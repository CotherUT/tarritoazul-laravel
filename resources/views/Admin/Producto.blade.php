<link href="{{ asset('css/producto.css') }}" rel="stylesheet">
@extends('Plantilla')
@section('Contenido')
    <section class="formulario">
        <div class="add_product">
            <h2 class="titulo">Añadir producto</h2>
            <div class="item1">
                <div class="nombre">
                    <p>Nombre:</p>
                    <input ID="tbNombre"  class="input"></input>
                </div>
                <div class="descripcion">
                    <p>Descripcion:</p>
                    <input ID="tbDescripcion"  class="input_descripcion" TextMode="MultiLine"></input>
                    <br />
                </div>
            </div>

            <div class="item2">

                <div class="precio">
                    <p>Precio:</p>
                    <input ID="tbPrecio"  class="input"></input>
                </div>

                <div class="cantidad">
                    <p>Cantidad:</p>
                    <input type="number" ID="tbCantidad"  class="input" TextMode="Number" Text="1"></input>
                </div>

                <div class="disponibilidad">
                    <p>Disponibilidad:</p>
                    <select name="ddlCategoria" id="ddlCategoria">
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
                    <input ID="tbEtiquetas"  class="input" TextMode="MultiLine"></input>
                </div>
            </div>
            <div class="file_up">
                <h2 class="titulo">Imagenes</h2>
                <input type="file" ID="FileUpload_Control"  AllowMultiple="true" />
                <br />
                <asp:Label ID="FileUpload_Msg"  Text=""></asp:Label>
            </div>
        </div>


        <div class="botones">
            <button ID="btnGuardar" class="btn btn-primario btnGuardar" OnClick="btnGuardar_Click" />Guardar</button>
            <button ID="btnEliminar" class="btn btn-peligro btnEliminar" OnClick="btnEliminar_Click" />Eliminar</button>
        </div>

        <asp:Label ID="FileUploadStatus" ></asp:Label>
    </section>
@endsection