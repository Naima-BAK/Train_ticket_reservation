@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/styleHome.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('css/styleHeader.css') }}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- Navigation -->
      
        
<form style="position: relative;" method="GET" action="/Voyage/resultatSearch" >
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
     {{-- <form action="/Voyage/resultatSearch" style="position: relative;" method="GET" > --}}
        <div style="position: absolute; left: 20px; top: 250px;" id="reservation" class="form-reservation">
          <input type="text" id="r-depuis" name="villeD" placeholder=" Depuis">
          <input type="text" id="r-vers" name="villeA" placeholder=" Vers">
          <input type="date" id="r-date" name="dateV" placeholder=" Date de départ">
         
             <button  type="submit" id="r-btn-submit"><b>Mettre à jour</b></button>
        </div>
</form>
<br><br><br>
<center><p><span style="color: blue;font-size:30px">TRAIN_IN</span> vous permet de chercher, comparer et acheter votre billet 
    de train </p></center><br><br>
<center><div style="margin-right:20px;">
<table class="etapes" style="center" >
    <tr>
        <td  class="tdchoisir" width="30%">
            <img src="{{ url('images/choisir.png') }}" alt="">
            <h4 class="color-blue">1. Choisir</h4>
            <p>Trouver l’offre qui vous convient.</p>

        </td>

        <td  width="30%">
            <img src="{{ url('images/Reserver.png') }}" alt="">
            <h4 class="color-blue">2. Réserver</h4>
            <p>Choisissez votre siège, et payer<br>  en ligne par votre carte bancaire <br> ou en espèces.</p>

        </td>

        <td  width="30%" >
            <img src="data:image/jpeg;base64,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" alt="">
            <h4 class="color-blue">3. Embarquer</h4>
            <p>RDV à l’adresse du départ avec <br> votre code du ticket !</p>
        </td>
    </tr>
</table></div></center>
<br><br><br><br>

<center>
<div style="background-color:blue; height:50px">     <!-- partie 3 -->
    <h3 style="color: aliceblue;padding:5px"><b>Simple, Rapide et sans frais supplémentaires</b></h3>
</div>


</center>
<br>
<br>


<meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
     body {
       font-family: Arial, Helvetica, sans-serif;
       margin: 0;
     }

     html {
       box-sizing: border-box;
     }

     *, *:before, *:after {
       box-sizing: inherit;
     }

     .column {
       float: left;
       width: 33.3%;
       margin-bottom: 16px;
       padding: 0 8px;
     }

     .card {
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
       margin: 8px;
     }

     .about-section {
       padding: 50px;
       text-align: center;
       background-color: #474e5d;
       color: white;
     }

     .container {
       padding: 0 16px;
     }

     .container::after, .row::after {
       content: "";
       clear: both;
       display: table;
     }

     .title {
       color: red;
     }

     .button {
       border: none;
       outline: 0;
       display: inline-block;
       padding: 8px;
       color: #ffc105;
       background-color: red;
       text-align: center;
       cursor: pointer;
       width: 100%;
     }

     .button:hover {
       background-color: blue;
     }

     @media screen and (max-width: 650px) {
       .column {
         width: 100%;
         display: block;
       }
     }
     </style>

     <div class="about-section" style="color:#ffc105;background-color:blue;margin-top:50px;">
       <h1>Propositions d'Hotels</h1>
     </div>

     {{-- <h2 style="text-align:center;">Propositions d'Hotels</h2> --}}
     <div class="row" style="margin-top: 50px;margin-left:10px;margin-right:10px;">
       <div class="column">
         <div class="card">
           <img src="https://media.istockphoto.com/photos/building-lobby-picture-id157509130?b=1&k=20&m=157509130&s=170667a&w=0&h=BiAYMjtaS8gi2Xu5H3fIux4fppqOctqi8mglCYVxIU0=" alt="Jane" style="width:100%">
           <div class="container">
             <h2 style="text-align:center;color:#ffc105;">Hotel 1</h2>
             <p class="title">Casablanca</p>
             <p style="text-align:center;">A vos gouts</p>
             <p style="text-align:center;">Hotel1@example.com</p>
             <p><button class="button" style="font-size: 20px;">Visiter</button></p>
           </div>
         </div>
       </div>

       <div class="column">
         <div class="card">
           <img src="https://cdn.pixabay.com/photo/2012/11/21/10/24/building-66789__340.jpg" alt="Mike" style="width:100%">
           <div class="container">
             <h2 style="text-align:center;color:#ffc105;">Hotel 2</h2>
             <p class="title">Marrakesh</p>
             <p style="text-align:center;color:blue;">Près d'un restaurant</p>
             <p style="text-align:center;color:blue;">Hotel2@example.com</p>
             <p><button class="button" style="font-size: 20px;">Visiter</button></p>
           </div>
         </div>
       </div>

       <div class="column">
         <div class="card">
           <img src="https://cdn.pixabay.com/photo/2017/06/09/09/30/swimming-pool-2386261__340.jpg" alt="John" style="width:100%">
           <div class="container">
             <h2 style="text-align:center;color:#ffc105;">Hotel 3</h2>
             <p class="title">Rabat</p>
             <p style="text-align:center;color:blue;">Avec une piscine</p>
             <p style="text-align:center;color:blue;">Hotel3@example.com</p>
             <p><button class="button" style="font-size: 20px;">Visiter</button></p>
           </div>
         </div>
       </div>
     </div>








<br><br><hr>
<div>
    <center>
      <div class="mere" style="display: flex;"> 
            <div class="div2"style="margin-left:400px">
               <a href="/"> <img  class="logo" src="/images/log.png" alt="" ></a>
             </div>
             <div class="div1" style="margin-left:100px">
                  <h5><b>Application Web <span style="color: blue;font-size:larger">TRAIN</span>_<span style="color: red;font-size:larger">IN</span></b></h5>
                  <h5><b>Imane & Naima</b></h5></div>
   
              </div> 
    
  </center>
</div>
<style>
     .etapes h2 {
    color:red;
    text-shadow: 2px 6px 6px red;
    text-align: center;
}
.etapes{
    text-align: center;

}
.etapes img{

    height:100px;
     width:100px;
}
.tdchoisir{
    padding-left: 100px;
}
</style>
@endsection