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
       
    <div class="wrap-table100" style="margin-bottom:400px;margin-top:0;margin-right:300px;">
      
{{------------------------------------------------------------------------------------------------}}
<h2 class="h2lst">La liste des utilisateur | total : {{App\Models\User::all()->count()}} utilisateurs</h2>
        
        


        
        <div class="table100 ver1 m-b-110">
    <div class="table100-head">
        

        {{-------------------------------------------------- table ----------------------------------------------}}
    <table>
    <thead>
    <tr class="row100 head">
        <th class="cell100 column1">ID</th>
        <th class="cell100 column2">Nom d'utilisateur</th>
        <th class="cell100 column3">Email</th>

    </tr>
    </thead>
     
    </table>
    </div>
    <div class="table100-body js-pscroll">
        
    <table>
        <tbody> 
            @foreach (App\Models\User::all() as $user)
       <tr class="row100 body">
       <td class="cell100 column1">{{$user['id']}}</td>
       <td class="cell100 column2">{{$user['name']}}</td>
       <td class="cell100 column3">{{$user['email']}}</td>
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
 
 