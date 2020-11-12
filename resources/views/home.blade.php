@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <button class="bt1 btr"><a href="/empleado">Empleado </a></button>
                <button class="bt1 btx"><a href="/articulo">Articulos </a></button>
            
            </div>
        </div>
    </div>
</div>
@endsection
