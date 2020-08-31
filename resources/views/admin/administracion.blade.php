
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title') Administración</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="routeName" content="{{ Route::currentRouteName() }}">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}"/> 
      <!-- <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}"> -->
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}"/> 
      <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

     
  </head>
  <body>

    <!-- Main Nav -->
    <nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap logout">
          {{ Auth::user()->name }}  <a class="nav-link" href="{{ url('/logout') }}"> <i class="fas fa-sign-out-alt"></i> </a>
        </li>
      </ul>
    </nav>

    <!-- Page -->
    <div class="container-fluid">
      <div class="row">
        <!-- Second Nav -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky pt-5">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'admin' ? 'active' : null }}" href="{{ url('/admin/administracion') }}"> <i class="fas fa-home"></i> Dashboard </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'usuarios' ? 'active' : null }}" href="{{ url('/admin/usuarios') }}"> Usuarios </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'oficios' ? 'active' : null }}" href="{{ url('/admin/oficios') }}"> Oficios </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'localidades' ? 'active' : null }}" href="{{ url('/admin/indexLocalidad') }}"> Localidad </a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Main section-->
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
         
          @section('content')
          @show
        </main>

      </div>
    </div>
  </body>
</html>