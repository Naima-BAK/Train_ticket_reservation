@extends('../admin.adminLayout')
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
        <div  class="add-train">
 {{-------------------------------------------------- Bouton ajouter ----------------------------------------------}}
        
            <button id="add-button" class="button btn-sm" type="button"data-bs-toggle="modal" data-bs-target="#addModal">Ajouter une catégorie <i class="fas fa-plus"></i></button>
        </div>

{{------------------------------------------------------------------------------------------------}}
         <h2 class="h2lst">La liste des categories | total : {{$categories->count()}} categories</h2>
        


        
        <div class="table100 ver1 m-b-110">
    <div class="table100-head">
        

        {{-------------------------------------------------- table ----------------------------------------------}}
    <table>
    <thead>
    <tr class="row100 head">
        
    <th class="cell100 column1">ID</th>
    <th class="cell100 column2">nom categorie</th>
    <th class="cell100 column3">prix categorie</th>
    <th class="cell100 column1">Actions</th>

    </tr>
    </thead>
     
    </table>
    </div>
    <div class="table100-body js-pscroll">
        
    <table>
   
     <tbody> 
         @foreach ($categories as $categorie)
    <tr class="row100 body">
    <td class="cell100 column1">{{$categorie['id']}}</td>
    <td class="cell100 column2">{{$categorie['nomCat']}}</td>
    <td class="cell100 column3">{{$categorie['prixCat']}}</td>
    <td>
         

         {{-------------------------------------------------- Bouton modifier ----------------------------------------------}}
         <div><a href="{{route('GestionCategorie.edit', ['GestionCategorie' => $categorie->id])}}"><button class="button btn-sm btn-warning" style="color: white;width:87px;"  type="submit">Edit</button></a></div>
              
        {{------------------------------------------------------------------------------------------------}}
 

        {{-- --------------------------------------bouton supprimer---------------------------------------- --}}
            <form method="post" action="{{route('GestionCategorie.destroy', [ 'GestionCategorie' => $categorie->id])}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>

       {{-- ------------------------------------------------------------------- --}}


    </td>
    </tr> @endforeach
    </tbody>
 
    </table>  
    {{--------------------------------------------------  ----------------------------------------------}}
    

    </div>
    </div>
    </div>
    </div></div>


    
{{--    ajout train  model -----------------------------}}

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter la catégorie :</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addBusForm" action="{{route('GestionCategorie.store')}}" method="post">
            @csrf
            <div class="mb-3">
               <input type="text" class="form-control" name="nomCat" id="nomCat" placeholder="nom de categorie">
            </div>
            <div class="mb-3"> 
               <input type="text" class="form-control" name="prixCat" id="prixCat" placeholder="prix de categorie" >
            </div>
            
         
               
               <button style="width: 100px; background-color: hotpink;">Ajouter</button>
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