@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  col-md-offset-2 ">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Trabajadores para {{auth()->user()->name}}</span>
                    <a href="/notas/create" class="btn btn-primary btn-sm">Nuevo Trabajador</a>
                    <!--a href="/chambitalaravel/public/index.php/notas/create"  class="btn btn-primary btn-sm">Nuevo Trabajador</a-->
                </div>

                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Oficio</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notas as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->edad }}</td>
                                <td>{{ $item->oficio }}</td>
                                <td><img src="{{asset('storage').'/' .$item->imagen }}" alt="" height="200px" width="200px" ></td>
                                <td>
									<a href=  "{{route('notas.editar', $item)}}"  class="btn btn-warning btn-sm col-md-9 col-md-offset-2 ">Editar   <i class="fas fa-pencil-alt"></i></a>
                                    <form class="d-inline" method="POST" action="{{ route('notas.destroy', $item) }}">
                                    {!! method_field('delete') !!}
                                     {!! csrf_field() !!}
                                    <button onClick="return confirm('Borrar?');"
                                     class="btn btn-danger btn-sm col-md-9 col-md-offset-2 ">Eliminar<i class="fas fa-trash-alt  "></i>
                                     </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$notas->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection