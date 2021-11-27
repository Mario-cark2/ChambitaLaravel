@extends('layouts.app')

@section('content')

<!doctype html>


<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet"  href="{{asset('css/login.css') }}">
        
        <link rel="stylesheet"  href="{{asset('css/app.css') }}">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
<!--div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body"-->
                
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="login-box">
                   
      <center> <img   src="{{asset('img/Aber.png') }}" class="avatar" width="100px" height="100px">
      </center>
      <center> <font> ¡BIENVENIDO A CHAMBITA! </center>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
 
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-7 ">
                                <input id="password" type="password" class="form-control" name="password" required>
                        

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-4">
                                <div class="checkbox">
                               
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-2 ">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                             
                                  <!--a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                 </a-->
                                 
                            </div>
                        </div>
                    </form>
                     
                   
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
 

<!--html lang="es">
    
  
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="login-box">
      <center>
      <img src="{{asset('img/Aber.png') }}" class="avatar" width="100px" height="100px">
      </center>
            <center>
            <font face="Comic Sans MS,arial">
                        ¡BIENVENIDO A CHAMBITA!</center>
                    </div>
                    <form  action="validarLogin.php" method="post">
                        <input type="email" name="email" placeholder="Correo" required minlength="15"  maxlength="30">
                        
                        <input type="password" placeholder="Contraseña" name="password" required minlength="4"  maxlength="12"> 
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Iniciar sesión</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="registro.php">¿No tienes Cuenta? Regístrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="../index.html">Volver</a>
                    
                </div>
            </div>
        </div>
            
    </body>
</html-->
@endsection
