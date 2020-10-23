@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Articulos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('articulo.create') }}" class="btn btn-info" >Añadir Articulo</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Id</th>
               <th>Descripcion</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($articulos->count())  
              @foreach($articulos as $articulo)  
              <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->precio}}</td>
                <td>{{$articulo->stock}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ArticuloController@edit', $articulo->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ArticuloController@destroy', $articulo->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $articulos->links() }}
    </div>
  </div>
</section>

@endsection