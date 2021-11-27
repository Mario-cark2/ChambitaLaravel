@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8   col-md-offset-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Info</span>
                    <!--a href="/chambitalaravel/public/index.php/notas" class="btn btn-primary btn-sm">Volver a lista...</a-->
                    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form action="{{ route('notas.update', $nota->id) }}" method="POST" enctype="multipart/form-data">
                    {!! method_field('PUT') !!}
    			    {!! csrf_field() !!}

                   
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      value="{{ $nota->nombre }}"required
                    />
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                      value="{{ $nota->descripcion }}"required
                    />
                    <input
                      type="text"
                      name="edad"
                      placeholder="edad"
                      class="form-control mb-2"
                      value="{{ $nota->edad }}"  maxlength="2" required 
                  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                    />
                    <input
                      type="text"
                      name="oficio"
                      placeholder="oficio"
                      class="form-control mb-2"
                      value="{{ $nota->oficio }}"required
                    />
                    <td><img src="{{asset('storage').'/' .$nota->imagen }}" alt="" height="200px" width="200px" ></td>
                    <input 
                    type="file"
                    name="imagen"
                    placeholder="Imagen"
                    class="form-control mb-2 "
                    accept="image/*"
                    value="{{ $nota->imagen }}" 
                    />
                    
                    <button class="btn btn-primary btn-block" type="submit">Editar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection