

@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/styleHome.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('css/styleHeader.css') }}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
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

<center>
  <br>
       <h6>           Resultats :</h6></center>

    <br>
 <div class="block-table block-spaced"> 
  
  <div class="container">
      <table class="table table_custom">
          <thead>
          <tr>
              <th scope="col">  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg> Relation</th>
              <th scope="col"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-calendar-date" viewBox="0 0 16 16">
                <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg> Date départ</th>
              <th scope="col"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-alarm" viewBox="0 0 16 16">
                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
              </svg> Heure</th>
              
              <th scope="col">numero de train </th>
              <th scope="col"></th>
          </tr>
          </thead>
          <tbody>
            @foreach ($voyages as $Voyage)                                                     
              <tr class="accordion-row">
                 <td data-th="Départ">
                      <div class="p-relative">
                          <div> {{$Voyage['villeDep']}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg> {{$Voyage['villeFin']}}</div>
                      </div>
                </td>
                  <td data-th="Arrivée">{{$Voyage['dateDepartVoyage']}}</td>
                  <td  class="corespo-row ">
                      
                  <div class="accordion-content-mobile">{{$Voyage['heureDepartVoyage']}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg> {{$Voyage['heureFinVoyage']}}
                  </div>
                  </td>
                  <td data-th="train">{{$Voyage['train_id']}}</td>
                  <td data-th="">
                      <a href="{{route('reservationChoisi.edit', $Voyage->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="blue" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg></a>
                        </td>                                              
              </tr>     @endforeach 
          </tbody></table></div></div>       
                                                  
            @endsection                          
                                                 
                 
                 
