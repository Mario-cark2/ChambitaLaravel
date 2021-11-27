@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Servidor</span>
                    <!--a href="/chambitalaravel/public/index.php/notas" class="btn btn-primary btn-sm">Volver a lista...</a-->
                    <a href="/notas/" class="btn btn-primary btn-sm">Volver a lista...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="{{url ('notas')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      minlength="5" maxlength="40" required 
                    />
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                      minlength="5" maxlength="40"required 
                    />
                    <input
                  type="text" 
                  name="edad" 
                  placeholder="Edad"
                      class="form-control mb-2"
                  value="" 
                  maxlength="2" required 
                  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                    />
                    <input
                      type="text"
                      name="oficio"
                      placeholder="oficio"
                      class="form-control mb-2"
                      minlength="5" maxlength="20" required 
                    />
                    
                   
                    <input 
                    type="file"
                    name="imagen"
                    placeholder="Imagen"
                    class="form-control mb-2 "
                    accept="image/*"  required 
                    />
                    @if ($errors->has('file'))
                    <small class="text-danger">{{ $errors->first('file') }}</small>
                    @endif
                    <Br>
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection