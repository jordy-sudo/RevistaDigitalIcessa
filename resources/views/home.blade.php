@extends('layouts.app')


@section('content')


    @vite(['resources/js/app.js'])


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
    
  
  <!-- Bootstrap row -->
  <div class="row" id="body-row">
      <!-- Sidebar -->
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
          <!-- Bootstrap List Group -->
          <ul class="list-group">
              <!-- Separator with title -->
              
              <!-- /END Separator -->
              <!-- Menu with submenu -->
              <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span> 
                      <span class="menu-collapsed">Ventas</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu1' class="collapse sidebar-submenu">
                  <a href="review" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Agencia</span>
                  </a>
                  <a href="vendedor" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Vendedor</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">*******</span>
                  </a>
              </div>
              <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-user fa-fw mr-3"></span>
                      <span class="menu-collapsed">Requerimiento</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu2' class="collapse sidebar-submenu">
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Settings</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Password</span>
                  </a>
              </div>            
              <a href="{{route('invitados-mater')}}" class="bg-dark list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-tasks fa-fw mr-3"></span>
                      <span class="menu-collapsed">Vista</span>    
                  </div>
              </a>
             
              
             
             
          </ul><!-- List Group END-->
      </div><!-- sidebar-container END -->
  
      <!-- MAIN -->
      <div class="col">
          
          <h1 class="text-center mt-2">
              Revista Digital
          </h1>
          
          
          <div class="card">
              <h4 class="card-header">Carga de imagen del mes de  {{ config('constants.date') }}</h4>
              <div class="card-body">
                    <main class="py-4">
                        @yield('Review')
                    </main>
              </div>
          </div>
         
  
  
      </div><!-- Main Col END -->
      
  </div><!-- body-row END -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        
        
@endsection
