@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center fw-bold">{{ __('Categorías') }}</div>

                <div class="card-body">

                  @if (Session('status')) <!-- SE CREA EL ALERTA EN EL INDEX DE ARTICULOS PARA MOSTRAR LA MODIFICACIONES -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">  {{ Session('status') }} </div>
                  @endif

                  <!-- CREAMOS UN BOTON PARA AGREGAR ARTIULOS Y LE ESTABLEMOS LA RUTA DEL METODO CREATE DEL CONTROLLER DE ARTICULOS -->
                  <div class="text-center"> <a href="{{ route('categorias.create') }}" class="btn btn-primary"> Agregar Categoría </a> </div>

                  <table class="table text-center">
                    <thread>
                        <tr>
                            <th>Nombre</th>
                            <th>Acción</th>
                        </tr>
                    </thread>

                    <tbody class="align-middle">
                    <!-- LISTAMOS LAS FIGURITAS QUE TENEMOS Y MOSTRAMOS UN MENSAJE SI NO CREAMOS NINGUNA -->

                        @if ($categorias->count() > 0)

                            @foreach ($categorias as $cat)
                            <tr>
                                <td> {{ $cat-> nombre }}</td>
                                <td> <a href="{{ route('categorias.edit', $cat) }}" class="btn btn-success"> <i class="fa fa-pencil fa-fw text-white"></i> </a>  <form action="{{ route('categorias.destroy', $cat) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn_eliminar_recurso"> <i class="fa fa-trash-o fa-fw"></i> </button>
                        </form> </td> <!-- AGREGAMOS LAS RUTAS AL METODO SHOW PARA INGRESAR A CADA ARTICULO DE LA DB -->
                            </tr>
                            @endforeach

                        @else
                          <tr>

                             <td colspan="5" class="text-center"> No hay categorías creadas </td>

                          </tr>
                        @endif

                    </tbody>

                  </table>

                </div>
            </div>
        </div>




<!--
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="row row-cols-1 row-cols-md-2 g-4">

                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nombre</h5>
                                <p class="card-text">Acá va el stock -ver como hacer esto-</p>
                                <a href="#" class="btn btn-primary">Ver Detalle</a>
                                <a href="#" class="btn btn-primary">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

-->


    </div>
</div>



    
@endsection

