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
 

 <div class="limiter">
    <div class="container-table100">
        @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    <div class="wrap-table100" style="margin-bottom:300px;margin-top:0;margin-right:100px;">
        <div class="addtrain_voiture">
            <style>
                .addtrain_voiture{
                    display: flex;
                }
                .addtrain_voiture .add-train{
                    margin: 20px;
                }
                
            </style>
        <div  class="add-train">
 {{-------------------------------------------------- Bouton ajouter ----------------------------------------------}}
        
            <button id="add-button" class="button btn-sm" type="button"data-bs-toggle="modal" data-bs-target="#addModal">Ajouter Voyage <i class="fas fa-plus"></i></button>
        </div>
        

</div>
{{------------------------------------------------------------------------------------------------}}
         <h2 class="h2lst">La liste des voyages | total : {{$voyages->count()}} voyages</h2>
        


        
        <div class="table100 ver1 m-b-110">
    <div class="table100-head">
        

        {{-------------------------------------------------- table ----------------------------------------------}}
    <table>
      <thead>
        <tr class="row100 head">
        
          <th class="cell100 column1">ID</th>
          <th class="cell100 column2">ville départ</th>
          <th class="cell100 column3">ville fin</th>
          <th class="cell100 column4">Date voyage</th>
          <th class="cell100 column5">numéro train</th>
          <th class="cell100 column6">Heure Départ</th>
          <th class="cell100 column7">Heure Fin</th>
          <th class="cell100 column8">Prix</th>
          <th></th>
          <th class="cell100 column9">Actions</th>

        </tr>
     </thead>
     
   </table>
    </div>
    <div class="table100-body js-pscroll">
        
    <table>
   
     <tbody> 
         @foreach ($voyages as $v)
       <tr class="row100 body">
        <td class="cell100 column1">{{$v['id']}}</td>
        <td class="cell100 column2">{{$v['villeDep']}}</td>
        <td class="cell100 column3">{{$v['villeFin']}}</td>
        <td class="cell100 column4">{{$v['dateDepartVoyage']}}</td>
        <td class="cell100 column5">{{$v['train_id']}}</td>
        <td class="cell100 column6">{{$v['heureDepartVoyage']}}</td>
         <td class="cell100 column7">{{$v['heureFinVoyage']}}</td>
        <td class="cell100 column8">{{$v['prixPropose']}}</td>
            <td>
         

               {{------------------------ Bouton modifier  -----------------------------------}}
         
              <div><a href="{{route('GestionVoyage.edit', ['GestionVoyage' => $v->id])}}"><button class="button btn-sm btn-warning" style="color: white;width:87px;"  type="submit">Edit</button></a></div>
               {{-------------------------------------------------------------------------------------}}
 

               <form method="post" action="{{route('GestionVoyage.destroy',$v->id)}}">
                 @method('DELETE')
                 @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>

           </td>
    </tr>
     @endforeach
    </tbody>
 
    </table>  
   

    </div>
    </div>
    </div>
    </div></div>


  
  {{-- ------------------------------------------------------- --}}
  
        

   
{{--    ajout voiture  model -----------------------------}}

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un voyage :</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addBusForm" action="{{route('GestionVoyage.store')}}" method="post">
            @csrf
        
            <div class="mb-3">
            <select name="villeDep"class="form-control" placeholder="">
              <option selected>Choisi une ville</option>
              @foreach (App\Models\Ville::all() as $v)
                <option value="{{ $v->nomVille }}">{{ $v->nomVille }}</option>
              @endforeach
              </select>
            </div>

            <div class="mb-3">
              <select name="villeFin" class="form-control" placeholder="">
                <option selected>Choisi une ville</option>
                @foreach (App\Models\Ville::all() as $v)
                  <option value="{{ $v->nomVille }}">{{ $v->nomVille }}</option>
                @endforeach
                </select>
              </div>

              <div class="mb-3">
                  <input type="date" class="form-control" name="dateDepartVoyage" id="dateDepartVoyage" placeholder="date voyage">
               </div>

               <div class="mb-3">
                  <select name="train_id" class="form-control" placeholder="">
                    <option disabled="disabled">Choisi une ville</option>
                    @foreach (App\Models\Train::all() as $t)
                      <option value="{{ $t->id }}">{{ $t->typeTrain }} numero {{ $t->id }}</option>
                    @endforeach
                    </select>
                  </div>

            <div class="mb-3">
                
               <input type="time" class="form-control" name="heureDepatVoyage" id="heureDepartVoyage" placeholder="heure depart">
            </div>

            <div class="mb-3">
               <input type="time" class="form-control" name="heureFinVoyage" id="heureFinVoyage" placeholder="heure fin">
            </div>
            
            <div class="mb-3">
              <input type="number" class="form-control" name="prixPropose" id="prixPropose" placeholder=" prix Propose">
           </div>
          
               
               <button class="btn btn-info">Add</button>
               @if ($errors->any())
                     
                          @foreach ($errors->all() as $error)
                                 <center> <h4 style="color: red;">{{$error}}</h4></center>
                              
                          @endforeach
                          
                              
                  @endif
              </form>
      </div>
      <div class="modal-footer">
           
    </div>
 </div>
</div>
</div>
  {{-- ------------------------------------------------------- --}}
 






<script src="../assets/scripts/admin_bus.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 @endsection