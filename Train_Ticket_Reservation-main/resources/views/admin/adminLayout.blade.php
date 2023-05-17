<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="\images\log.png">
  <link rel="icon" type="image/png" href="\images\n.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Train_IN
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ url('css/styleAdmin.css')}}" rel="stylesheet" />
  
</head>
<style>
  body{
    overflow-x: hidden;
  }
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="public\images\register.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Train_IN
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/admin/admin">
              <i class="material-icons">dashboard</i>
              <p>
                Tableau de bord</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/listTrain">
              <i class="material-icons">train</i>
              <p>Gestion des Trains</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/listCategorie">
              <i class="material-icons">category</i>
              <p>Gestion des categories</p>
            </a>
          </li>
          

          <li class="nav-item ">
            <a class="nav-link" href="/listVille">
              <i class="material-icons">apartment</i>
              <p>Gestion des villes</p>
            </a>
          </li>


          <li class="nav-item ">
            <a class="nav-link" href="/listVoyage">
              <i class="material-icons">moving</i>
              <p>Gestion des voyages</p>
            </a>
          </li>
        
               <li class="nav-item ">
            <a class="nav-link" href="/listusers">
              <i class="material-icons">groupadd
            </i>
              <p>gestion utilisateurs</p>
            </a>
          </li>
           
          
           <li class="nav-item ">
            <a class="nav-link" href="/contactx">
              <i class="material-icons">question_answer</i>
              <p>Messages</p>
              
            </a>
          </li>
         
         
          <li class="nav-item ">
            <a class="nav-link" href="/listReservations">
              <i class="material-icons">list</i>
              <p>liste des reservations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Ventes-Conso">
              <i class="material-icons">functions</i>
              <p>Les rapports</p>
            </a>
          </li>
         
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"> <img  class="logo" src="/images/log.png" alt="" > </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Chercher...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/contactx" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">messages</i>
                  <span class="notification">{{  App\Models\Contact::all()->count()}}
                  
                  </span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                  <button style="background-color: black;color:white"> {{ __('Logout') }}</button> <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                </form>
                </a>
                  
                </a>

                  

                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid px-lg-4">
        <div class="row">
          <div class="col-md-12 mt-lg-4 mt-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              
              
          </div>
        </div>
        
           
                      
        

        <div class="bo">
          @yield('content')
      </div>
      
        <style>.bo{
      
       height: 400PX;
       width: 900PX;
      margin-left: 100px;
      margin-top: 100px
      }
       </style>
      </div>
      </div>
        </div>
</body>

</html>