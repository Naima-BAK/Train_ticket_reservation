@extends('admin.adminLayout')
 @section('content')
 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS -->
 <link href="{{ url('css/styleList.css')}}" rel="stylesheet" /> 



{{--        -------------------------         css   ------------------------ --}}
<style>
    .add-train{
       
        margin-bottom: 20px;
        
    }
    .h2lst{
        text-align: center;
    }
    .add-train #add-button{
       width: 200px !important;
       height: 50px;
       border: 0ch;
      background-color: red;
    }
</style>

{{-------------------------------------------------- body ----------------------------------------------}}
 <div class="limiter" >
    <div class="container-table100">
       
    <div class="wrap-table100" style="margin-bottom:300px;margin-top:0;margin-right:100px;">
      
{{------------------------------------------------------------------------------------------------}}
<h2 class="h2lst">La liste des Reservation | total : {{App\Models\AvantPaiment::all()->count()}} Reservations</h2>
        
        <div class="table100 ver1 m-b-110">
    <div class="table100-head">
        

        {{-------------------------------------------------- table ----------------------------------------------}}
    <table>
    <thead>
    <tr class="row100 head">
        <th class="cell100 column2">ville Depart</th>
        <th class="cell100 column3">villeArrivée</th>
        <th class="cell100 column1">Train</th>
        <th class="cell100 column1">cordonnées place</th>
        <th class="cell100 column2">Montant</th>
        <th class="cell100 column3">Client</th>
        <th class="cell100 column1">Date Voyage</th>

    </tr>
    </thead>
     
    </table>
    </div>
    <div class="table100-body js-pscroll">
        
    <table>
        <tbody> 
            @foreach (App\Models\AvantPaiment::all() as $r)
       <tr class="row100 body">
       <td class="cell100 column2">{{$r['villeDepart']}}</td>
       <td class="cell100 column3">{{$r['villeFin']}}</td>
       <td class="cell100 column1">{{$r['numeroTrain']}}</td>
       <td class="cell100 column2">{{$r['infoPlaceVoiture']}}</td>
       <td class="cell100 column3">{{$r['prixPropose']}}</td>
       <td class="cell100 column3">{{$r['nomUser']}}</td>
       <td class="cell100 column3">{{$r['DateDepart']}}</td>
      </tr> @endforeach
       </tbody>
 
    </table>  
    {{--------------------------------------------------  ----------------------------------------------}}
    

    </div>
    </div>
    </div>
    </div></div>


  
        
 








<script src="../assets/scripts/admin_bus.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 @endsection
 
 