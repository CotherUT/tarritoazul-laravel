<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

@extends('Plantilla')
@section('Contenido')
    <h1>Panel de control</h1>
    <h2>Productos</h2>
    <button type="button" class="btn btn-primario" onclick="window.location='{{ route("Producto.create") }}'">Nuevo producto</button>
    <br>
    <br>
    @if ($var_productos)
        <table>
            <tr>
                <th>Accion</td>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Disponibilidad</th>
                <th>Categoria</th>
                <th>Etiquetas</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
            @foreach ($var_productos as $i)
                <tr>
                    <td>
                        <a href="{{ route('Producto.edit', $i) }}">Editar</a>
                        ,
                        <a href="{{ route('Producto.destroy', $i) }}">Eliminar</a>
                    </td>

                    <td>
                        {{ $i->nombre }}
                    </td>
                    <td>
                        {{ $i->descripcion }}
                    </td>
                    <td>
                        {{ $i->precio }}
                    </td>
                    <td>
                        {{ $i->cantidad }}
                    </td>
                    <td>
                        {{ $i->disponibilidad }}
                    </td>
                    <td>
                        {{ $i->categoria }}
                    </td>
                    <td>
                        {{ $i->etiquetas }}
                    </td>
                    <td>
                        {{ $i->created_at }}
                    </td>
                    <td>
                        {{ $i->updated_at }}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay Productos</p>
    @endif
@endsection
