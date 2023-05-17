

<img src="{{ public_path('qr.png') }}" style="margin-top:50px; width: 150px; height: 150px;">

<center><img src="{{ public_path('log.png') }}" style="margin-left:460px;margin-buttom:40px; width: 250px; height: 60px;">

    <h2 style="color: blue">Votre confirmation de  billet </h2></center>


<style>
     .tab1{
      width: 100%;
      border: 1px solid black;
      margin-top: 20px;
      color: white;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      background-color: black;
      font-size: large;
      padding: 10px;
  
    .header{display: inline-block; 
  width: 100%;
}
.one{
    float: right;
    margin-right: 60px;
 }

.two{
    float: left;
}
#c th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
#c {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#c td, #c th {
  border: 1px solid #ddd;
  padding: 8px;
}

#c tr:nth-child(even){background-color: #f2f2f2;}

#c tr:hover {background-color: #ddd;}
    </style>
   
    
    <table class="tab1">
      
      <tr>
        <td>{{$reservation->villeDepart}}</td>
        <td>{{$reservation->villeFin}}</td>
        <td >{{$reservation->prixPropose}} DHs</td>
        
      </tr>
     
    </table>
    <br>
    <hr>
    <br>
    <div class="header">
        <div class="two">
        <ul>
            <li>Nom : M.(Mme) <b>{{$reservation->nomUser}}</b></li><br>
            <li>Email : <b>{{Auth::user()->email}}</b></li><br>
            <li>Votre date de départ : <b>{{$reservation->DateDepart}}</b></li>
        </ul>
    </div>

    <div class="one">
        <ul>
            <li>Billet numero : <b>{{$reservation->id}}</b></li><br>
            <li>Identifiant_client : <b>{{Auth::user()->id}}</b></li><br>
            
        </ul>
    </div>
 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br>
 <table id="c">
      <tr>
         
              <th>Depart / Arrivée</th>
              <th>Heure</th>
              <th>Votre place</th>
             
          
      </tr>
    <tr>
      <td>{{$reservation->villeDepart}}</td>
      <td>Départ : {{$reservation->heureDepart}}</td>
      <td >Train Num :{{$reservation->numeroTrain}}</td>
      
    </tr>
    <tr>
        <td>{{$reservation->villeFin}}</td>
        <td>Arrivée :{{$reservation->heureFin}}</td>
        <td >{{$reservation->infoPlaceVoiture}}</td>
        
      </tr
   
  </table>
   
</div>