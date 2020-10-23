@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenido a las Tablas
                </div>
                <a href="/empleado">-->Tabla de Empleado </a>
                <br>
                <a href="/articulo">--> Tabla de Articulos </a>
            </div>
        </div>
    </div>
</div>
@endsection
