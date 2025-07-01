@extends('layouts.app')

@section('content')
<!--BUSQUEDA DE FIGURITAS POR NOMBRE Y NUMERO-->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ $articulo->nombre }}</div>
                    <div class="card-body" style="min-height: 500px">
                        {{ $articulo->nombre }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('articulos.index') }}" class="btn btn-primary"> Volver a tienda </a> <!--ESTE TIENE QUE VOLVER A LA PAGINA TIENDA.PHP-->
                    </div>
                    <div class="card">
                    <div class="card-header fw-bold">{{ $articulo->numero }}</div>
                    <div class="card-body" style="min-height: 500px">
                        {{ $articulo->numero }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('articulos.index') }}" class="btn btn-primary"> Volver a tienda </a> <!--ESTE TIENE QUE VOLVER A LA PAGINA TIENDA.PHP-->
                    </div>
                </div>
            </div>
        </div>
    </div>    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ $articulo->nombre }}</div>
                    <div class="card-body" style="min-height: 500px">
                        {{ $articulo->nombre }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('articulos.index') }}" class="btn btn-primary"> Volver a tienda </a> <!--ESTE TIENE QUE VOLVER A LA PAGINA TIENDA.PHP-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/admin/submit_eliminar_recurso.js'])

@endsection