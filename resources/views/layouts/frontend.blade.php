<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.alerts.min.css')}}" rel="stylesheet">
    <link rel="stylesheet"  type="text" href="{{asset('fontawesome-5-8/css/all.css')}}">
    <title>Curso Laravel</title>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        .center-content {
          display: flex;
          justify-content: center;
          align-items: center;
         
        }

        .logo-small {
        width: 50px;
        height: 50px;
        }

        .gray-400 {
        background-color: #d1d5db; /* Color gris 400 de Tailwind CSS */
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
    </style>
</head>
<body>
    <div class="container">

        {{-- ENCABEZADO --}}
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="{{route('index')}}">

                <img class="logo-small" src="{{asset('images/logo.png')}}" alt="">

              </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
          </div>
        </header>
        {{-- /END ENCABEZADO --}}
      
        {{-- BARRA DE MENU --}}
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{route('index')}}">Inicio</a>
           {{--  <a class="p-2 link-secondary" href="{{route('contactanos')}}">Correo</a> --}}
            <a class="p-2 link-secondary" href="{{route('contactanos.index')}}">Contactanos</a>
            <a class="p-2 link-secondary" href="{{route('comprar')}}">Webpay</a>
          </nav>
        </div>
         {{-- END BARRA DE MENU --}}

    </div> {{-- END CONTAINER --}}

   <main class="container">
    @yield('content') {{-- Contenido principal --}}
   </main>

   <footer class="blog-footer fixed-bottom">

    <p>Desarrollado por maytechsoluciones  <a href="https://maytechsoluciones.com/">MAYTECHSoluciones</a></p>

  </footer>
    <script src="{{asset('js/jquery-2.0.0.min.js')}}"> </script>
    <script src="{{asset('js/bootstrap.js')}}"> </script>
    <script src="{{asset('js/jquery.alerts.min.js')}}"> </script>
    <script type="text/javascript" src="{{asset('js/funciones.js')}}"> </script>
</body>
</html>