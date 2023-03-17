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
                    <input ID="tbCantidad"  class="input" TextMode="Number" Text="1"></input>
                </div>

                <div class="disponibilidad">
                    <p>Disponibilidad:</p>
                    <asp:DropDownList ID="ddlDisponibilidad"  class="input">
                        <asp:ListItem id="liDisponible"  Text="Disponible"></asp:ListItem>
                        <asp:ListItem id="liAgotado"  Text="Agotado"></asp:ListItem>
                        <asp:ListItem id="liOculto"  Text="Oculto"></asp:ListItem>
                    </asp:DropDownList>
                </div>

                <div class="categoria">
                    <p>Categoria:</p>
                    <asp:DropDownList ID="ddlCategoria"  class="input" DataSourceID="CategoriasConnectionString" DataTextField="nombre" DataValueField="id_categoria"></asp:DropDownList>
                </div>

                <div class="etiquetas">
                    <p>Etiquetas:</p>
                    <input ID="tbEtiquetas"  class="input" TextMode="MultiLine"></input>
                </div>
            </div>
            <div class="file_up">
                <h2 class="titulo">Imagenes</h2>
                <asp:FileUpload ID="FileUpload_Control"  AllowMultiple="true" />
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