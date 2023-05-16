
@extends('layouts.app')

@section('content')


  <link rel="stylesheet" href="css/styleContact.CSS"> 

  
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
  @endif
  
  <br><br>
  <section id="contact">
    <fieldset style="text-align:center;padding-bottom: 40px;background-color: transparent;"><legend><h1 style="background-color: rgb(76, 76, 212)">Contactez-nous</h1></legend><br><br>
     
      <div class="contact">
          <div class="contact-information">
            <fieldset style="text-align: center;padding-bottom: 20px;background-color: transparent"><legend><h1>Plus d'informations sur nous</h1></legend><br><br><br>
               <h4>Téléphone: <span>+ 0123 4444 78</span></h4><br>
               <h4>Email: <span>Train_In@Transport.com</span></h4><br>
               <h4>Notre site: <span>Train_In.com</span></h4>
            </div>
          </fielset>
            
            <form class="contact-form"  action="{{route('contactx.store')}}" method="post">
              @csrf
          
              
                 <input type="text"  name="nom" id="your-name" placeholder="Entrez Votre Nom">
              
                <input type="text"  name="email" id="email" placeholder="Entrez votre Email">
             
                <textarea type="text"  name="message" id="message" rows="10" placeholder="Entrez votre Message"></textarea>
             
     
                 <button id="btn-contact-form" class="btn btn-info"><span> Add</span></button>
                 @if ($errors->any())
                       
                            @foreach ($errors->all() as $error)
                                   <center> <h4 style="color: red;">{{$error}}</h4></center>
                                
                            @endforeach
                            
                                
                    @endif 
                   </form>

                  
                  
          </fielset>
      </div><br><br>
      <hr style="background-color: rgb(76, 76, 212);height:10px">     
      <br><br>
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