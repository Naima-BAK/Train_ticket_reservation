@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ url('css/styleHome.css') }}">

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- Navigation -->
      <form style="position: relative;" method="GET" action="" >
        <div id="slider">
            <figure>
                <img src="https://getwallpapers.com/wallpaper/full/0/6/a/87633.jpg">
                <img src="https://getwallpapers.com/wallpaper/full/4/5/8/363948.jpg">
                <img src="https://getwallpapers.com/wallpaper/full/0/6/a/87633.jpg">
                <img src="https://getwallpapers.com/wallpaper/full/4/5/8/363948.jpg">
                <img src="https://getwallpapers.com/wallpaper/full/0/6/a/87633.jpg">
            </figure>
        </div>
         <div></div>
        <div style="position: absolute; left: 20px; top: 250px;" id="reservation" class="form-reservation"> 
           <input type="text" id="r-name" placeholder="Ma ville de départ">
                 <input type="tel" id="r-phone" placeholder="Ma ville d'arrivée">
                
                 <input type="date" id="r-date" placeholder="Ma date de départ">
                 <select id="r-time">
                     <option value="Time">Mon confort</option>
                     <option value="10:00am">Classe 1</option>
                     <option value="11:00am">Classe 2</option>
                     <option value="12:00pm">Lit Single</option>
                     
                 </select>
                 <select id="r-person">
                     <option value="Person">Voyageurs</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4+">4+</option>
                 </select>
                 <button  type="submit" id="r-btn-submit"><b>Mettre à jour</b></button>
        </div>
    
    </form>




    
@endsection
  

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}



{{-- 
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
    
        @if (Route::has('login'))<li class="nav-item">
        <select class="nav-link" style="border: 0;background-color:red !important;" name="Se connecter" id="">
           <option value=""  >Connecter</option>   
         <option value=""  ><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></option>
         <a class="nav-link" href="{{ route('admin.login') }}"><option value="">{{ __('Login Admin') }}</option></a>
          {{-- <a class="nav-link" href="#"><option value="">S'inscrire</option></a> --}}
       
           
        {{-- @endif
    
        @if (Route::has('register'))
            
                <a class="nav-link" href="{{ route('register') }}"><option value="">{{ __('Register') }}</option></a>
            </select></li>
        @endif --}} 