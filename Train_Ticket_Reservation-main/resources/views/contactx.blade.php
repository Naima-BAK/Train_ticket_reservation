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
 
@foreach ($contacts as $v)
    <div class="alert alert-dark" role="alert">
        <b><h6> <span style="color: black">De:</span> {{$v['email']}}</h6></b> 
        <br>
        <h5 style="color: black;font-family:fantasy">{{$v['message']}}</h5><br>
        <h6 style="text-align: right;color:red">{{$v['nom']}}</h6>
        <form method="post" action="{{route('contactx.destroy',$v->id)}}">
            @method('DELETE')
            @csrf
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
         </form>
    </div>
@endforeach
 <div class="limiter">
    <div class="container-table100">
    <div class="wrap-table100">
        <div class="addtrain_voiture">
            <style>
                .addtrain_voiture{
                    display: flex;
                }
                .addtrain_voiture .add-train{
                    margin: 20px;
                }
            </style>
        
   

    </div>
    </div>
    </div>
    </div></div>


  
  {{-- ------------------------------------------------------- --}}
  
      
    {{-- ------------------------------------------------------- --}}
   
    

  








<script src="../assets/scripts/admin_bus.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection