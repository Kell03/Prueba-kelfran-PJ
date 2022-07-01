<html lang="en" style="height: auto;"><head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="DtASEl6xyrdtlKGrZNDHMe2OLm4gN19LUQH622ia">

    
    
    
    <title>@section('title')    @show       </title>

    
    
    
            <link rel="stylesheet" href="http://ventas.test/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://ventas.test/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        <link rel="stylesheet" href="http://ventas.test/vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
              <script src="https://kit.fontawesome.com/343823813c.js" crossorigin="anonymous"></script>

    
    
    
    
                <link rel="stylesheet" href="/css/admin_custom.css">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>{{--extension jquery para que funcione el alerta--}}


                <style type="text/css">
    
.opts a {


     display: inline-block;
    padding:8px;
    border: 1px solid #dedede;
   



}


.opts form {


     display: inline-block;
   



}


.opts a:hover{
        
       box-shadow: 0px 0px 5px 1px gray;

        } 

.btn_agregar{

    padding: 10px;
}
.btn_agregar a {

    
     box-shadow: 3px 7px 5px -1px rgba(190,184,184,1);
}

</style>

    
    
</head>

<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">

    
        <div class="wrapper">

        
                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#">
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        
        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">

    
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>

    
    <div class="navbar-search-block">
        <form class="form-inline" action="#" method="get">
            <input type="hidden" name="_token" value="DtASEl6xyrdtlKGrZNDHMe2OLm4gN19LUQH622ia">

            <div class="input-group">

                
                <input class="form-control form-control-navbar" type="search" name="adminlteSearch" placeholder="search" aria-label="search">

                
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </form>
    </div>

</li>

<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>


        
                                    <li class="nav-item dropdown user-menu">

    
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span>
            {{auth::user()->name}}

        </span>
    </a>

    
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        
                            
        
        
        
        
        
        <li class="user-footer">
                        <a class="btn btn-default btn-flat float-right  btn-block " href="{{route('salir')}}">

                            {{ __('Logout') }}
                <i class="fa fa-fw fa-power-off text-red"></i>
                Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                                <input type="hidden" name="_token" value="DtASEl6xyrdtlKGrZNDHMe2OLm4gN19LUQH622ia">
            </form>
        </li>

    </ul>

</li>
                    
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="http://ventas.test/home" class="brand-link ">

    
    <img src="http://ventas.test/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE" class="brand-image img-circle elevation-3" style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>Admin</b>LTE
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                
                <li>

    <div class="form-inline my-2">
        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="»">

            
            <input class="form-control form-control-sidebar" type="search" placeholder="search" aria-label="search">

            
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-fw fa-search"></i>
                </button>
            </div>

        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
    </div>

</li>



<li class="nav-item">

    <a class="nav-link  " href="{{route('home')}}">

        <i class="fa-solid fa-house"></i>

        <p>
            Inicio

                            <span class="badge badge-success right">
                    4
                </span>
                    </p>

    </a>

</li>



<li class="nav-item has-treeview ">

    
    <a class="nav-link  " href="">

        <i class="fa-solid fa-gear"></i>

        <p>
           Configuracion
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li class="nav-item">

    <a class="nav-link  " href="{{route('products.index')}}">

        <i class="fa-solid fa-box-archive"></i>

        <p>
            Almacen

                    </p>

    </a>

</li>




<li class="nav-item">

    <a class="nav-link  " href="{{route('users.index')}}">

        <i class="fa-solid fa-users"></i>

        <p>
            Usuarios

                    </p>

    </a>

</li>

    </ul>

</li>

<li class="nav-item has-treeview ">

    
    <a class="nav-link  " href="">

        <i class="fa-solid fa-cash-register"></i>

        <p>
           Ventas
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li class="nav-item">

    <a class="nav-link  " href="{{route('facturas.index')}}">
  
      <i class="fa-solid fa-cart-shopping"></i>
        <p>
            Compras

                    </p>

    </a>

</li>

  </ul>

</li>


<li class="nav-header ">

    ACCOUNT SETTINGS

</li>

<li class="nav-item">

    <a class="nav-link  " href="http://ventas.test/admin/settings">

        <i class="fas fa-fw fa-user "></i>

        <p>
            Profile

                    </p>

    </a>

</li>

<li class="nav-item">

    <a class="nav-link  " href="http://ventas.test/admin/settings">

        <i class="fas fa-fw fa-lock "></i>

        <p>
            Change Password

                    </p>

    </a>

</li>

<li class="nav-item has-treeview ">

    
    <a class="nav-link  " href="">

        <i class="fas fa-fw fa-share "></i>

        <p>
            Multi Level
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1

                    </p>

    </a>

</li>

<li class="nav-item has-treeview ">

    
    <a class="nav-link  " href="">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 2

                    </p>

    </a>

</li>

<li class="nav-item has-treeview ">

    
    <a class="nav-link  " href="">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 2
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 3

                    </p>

    </a>

</li>

<li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 3

                    </p>

    </a>

</li>

    </ul>

</li>

    </ul>

</li>

<li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1

                    </p>

    </a>

</li>

    </ul>

</li>

<li class="nav-header ">

    LABELS

</li>

<li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle text-red"></i>

        <p>
            Important

                    </p>

    </a>

</li>

<li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle text-yellow"></i>

        <p>
            Warning

                    </p>

    </a>

</li>

<li class="nav-item">

    <a class="nav-link  " href="#">

        <i class="far fa-fw fa-circle text-cyan"></i>

        <p>
            Information

                    </p>

    </a>

</li>

            </ul>
        </nav>
    </div>

</aside>
        
        
                    <div class="content-wrapper " style="min-height: 700px;" >



    
            <div class="content-header">
                @if(Session::has('message'))
          <div class="container">   

         <div class="alert alert-{{Session::get('typealert')}}" style="display:none;">  
            {{Session::get('message') }}
                           @if($errors->any())
                           <ul>
            
                              @foreach($errors->all() as $error)
                                  <li>{{$error}} </li>
                                   @endforeach

            

                                </ul>
                            @endif
         
         <script>   
            $('.alert').slideDown();
            setTimeout(function(){$('.alert').slideUp(); }, 2000);

         </script>
         </div>
        </div> 
        @endif


            <div class="container-fluid" >
                @section('header-page')

                @show
                    
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">

             @section('body-page')

                @show
        </div>
    </div>

</div>
        
        
        
        
        
    <div id="sidebar-overlay"></div></div>

    
            <script src="http://ventas.test/vendor/jquery/jquery.min.js"></script>
        <script src="http://ventas.test/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://ventas.test/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        
        <script src="http://ventas.test/vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    
    
    
                <script> console.log('Hi!'); </script>




</body></html>