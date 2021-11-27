<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <link  rel="icon"   href="img/chambita2.png" type="image/png" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">
	<title> Chambita </title>
    <link rel ="stylesheet" href="css/estilosIndex.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
            rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"> 
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!--style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style-->
    </head>
    <body>
        

            <!--div class="content">
                <div class="title m-b-md">
                    Laravel!
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div-->
        <div class="banner">
            <!-- <h1>Menu pegajoso con css</h1> -->
        </div>
    
        <header class="pegajoso">
            <figure class="figura">
                <!--<img src="img/macuin.png" alt="Logo"> !-->
            </figure>
            <nav class="prueba"> <!--ELIMINA CLASS: PRUEBA-->
                <!--a href="#" class="active"> </a>  
              
                <a href="paginas/registro.php"> Crear cuenta</a>
                <a href="paginas/login.php">   Iniciar sesión</a-->
                <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('notas') }}">Listas</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
               
            </nav>
        </header>

        







        <header class="header" id="inicio">
          <!--  <img src="img/menu.svg" alt="" class="menu">
            <nav class="menu-navegador">
                <a href="#iniciarSesion">Iniciar sesión</a>
                <a href="#contacto">Contacto</a> -->
                
            </nav>
            <div class="contenedor head">
               <!-- <h1 class="titulo"> Convertimos tus sueños en realidad</h1>
                <p class="copy"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sint unde rem quia explicabo doloremque quidem labore placeat neque deleniti, similique doloribus dolore aut nihil ut modi consectetur nemo assumenda!</p>
               -->
            </div>


        </header>

        <main>
            <section class="services contenedor" id="servicio">
              <!--  <h2 class="subtitulo">¿Como funciona Oficio Express?</h2> -->
                <div class="contenedor-servicio">
                    <img src="img/trabajador.png" alt="">
                    <div class="checklist-servicio">
                        <div class="service">

                            <p class="preguntas"> ¿Cómo funciona Chambita? 
                            </p> 
                            <p class="texto" style= "text-align: justify";> La Secretaría del Trabajo y previsión social busca ofrecer programas de generación de empleos, a través de Oficio Express nosotros te presentamos un catálogo sobre los distintos ciudadanos que ejercen un oficio. Aquí encontrarás perfiles de acapulqueños con las capacidades para realizarte algún servicio de los que ofrecen, te mostramos sus datos de contacto para un trato directo. </p>
                             
                        </div>
                        <div class="service">

                            <p class="preguntas"> ¡Regístrate! 
                            </p> 
                            <p class="texto" style="text-align: justify;"> Para acceder necesitas crear una cuenta, rellenarás un formulario con datos básicos y ¡LISTO!
                            </p>

                        </div>
                        <div class="service">
                            <img src="img/check.png">

                           <!-- <h3 class="n.service"><span class="number">3 </span> Diseño web</h3> -->
                            <p> </p>

                        </div>
                    </div>
                </div>
            </section>

            <!--
                iniciando galería
            -->
            <section class="galeria" id="portafolio">
                <div class="contenedor">
<!--                <h2 class="subtitulo"> Galería</h2> !-->
                    <div class="contenedor-galeria">
                        <img src="img/1.jpg" alt="" class="img-galeria">
                        <img src="img/2.jpg" alt="" class="img-galeria">
                        <img src="img/3.jpg" alt="" class="img-galeria">
                        <img src="img/4.jpg" alt="" class="img-galeria">
                        <img src="img/5.jpg" alt="" class="img-galeria">
                        <img src="img/6.jpg" alt="" class="img-galeria">
                    </div>
                </div>
            </section> <!--Termina galería-->


            <!-- <section class="imagen-light">


                <img src="img/3.jpg" alt="" class="close">
                <img src="" alt="" class="agregar-imagen">
            </section> -->



            <section class="contenedor" id="logos"> 
                <h2 class="subtitulo">Desarrollado por</h2>
                <section class="powered">
                    <div class="contenedor-powered">
                        <img src="img/styps.png" width="215" height="97" alt="">
                        <h3 class="n-powered">Secretaría del Trabajo y Previsión social</h3>
                    </div>
                    <div class="contenedor-powered">
                        <img src="img/uta.png" width="100" height="100" alt="">
                        <h3 class="n-powered">Universidad Tecnológica de Acapulco</h3>
                    </div>
                    <!-- <div class="contenedor-powered">
                        <img src="img/tics.png" alt="">
                        <h3 class="n-powered">Tecnológias de la Información</h3>
                    </div> -->
                </section>
            </section>


            </main>

            <footer id="contacto">
              <div class="footer-content">
                <div class="contact">
                   
                </div>
                <div class="mContactos">
                    <a href="./" class="iconos" name="redes">
                        <i class='bx bxl-facebook-circle' ></i>
                    </a>
                    <a href="./" class="iconos">
                        <i class='bx bxl-twitter' ></i>
                        
                    </a>
                    <a href="./" class="iconos">
                        <i class='bx bx-world' ></i>
                        
                    </a>
                    <a href="./" class="iconos">
                        <i class='bx bxl-instagram-alt' ></i>
                    </a>
                </div>
              </div>
              <div class="line"></div>
              </footer>



       
      <script src="js.menu.js"></script>  
      <script src="js/lightbox.js"></script>
            </div>
        </div>






        
    </body>
</html>