@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center fw-bold">{{ __('Artículos') }}</div>

                <div class="card-body">

                    @if (Session('status')) <!-- SE CREA EL ALERTA EN EL INDEX DE ARTICULOS PARA MOSTRAR LA MODIFICACIONES -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">  {{ Session('status') }} </div>
                    @endif




                    <!-- CREAMOS UN BOTON PARA AGREGAR ARTIULOS Y LE ESTABLEMOS LA RUTA DEL METODO CREATE DEL CONTROLLER DE ARTICULOS -->
                    <div class="text-center">
                    <a href="{{ route('articulos.create') }}" class="btn btn-primary"> Agregar Artículo </a>
                    </div>

                    <table class="table text-center">
                    <thread>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                    </thread>

                    <tbody class="align-middle">
                    <!-- LISTAMOS LAS FIGURITAS QUE TENEMOS Y MOSTRAMOS UN MENSAJE SI NO CREAMOS NINGUNA -->

                        @if ($articulos->count() > 0)

                            @foreach ($articulos as $art)
                            <tr>
                                <td> <img class="img-thumbnail img-fluid" style=" width: 118px; height: 210px " src="{{ asset('/storage/' . $art->img) }}" alt=".."> </td>
                                <td> {{ $art-> nombre }}</td>
                                <td> {{ $art-> categoria->nombre }} </td>
                                <td> {{ $art-> precio }}</td>
                                <td> {{ $art-> stock }} </td>
                                <td> <a href="{{ route('articulos.edit', $art) }}" class="btn btn-success"> <i class="fa fa-pencil fa-fw text-white"></i> </a>  <form action="{{ route('articulos.destroy', $art) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn_eliminar_recurso"> <i class="fa fa-trash-o fa-fw"></i> </button>
                        </form> </td> <!-- AGREGAMOS LAS RUTAS AL METODO SHOW PARA INGRESAR A CADA ARTICULO DE LA DB -->
                            </tr>
                            @endforeach

                        @else
                          <tr>

                             <td colspan="15" class="center"> No hay artículos creados </td>

                          </tr>
                        @endif

                    </tbody>

                    </table>
                    <div class="d-flex justify-content-center">
                    {{ $articulos->links() }} <!-- PARAMETRO DEL PAGINADO -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
