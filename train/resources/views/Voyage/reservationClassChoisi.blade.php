

<br><br>
<form id="addBusForm"  action="/acheter" method="POST"  class="formm">
  @csrf
  
  @method('POST')
  {{-- ------------- --}}
  <div id="form-main-container">
    <div id="form-area">
        <div id="form-title" >
            <b style="color: red;">Choisir votre Place </b>
        </div>
        <div id="form-body">
           <div>
            
  <div style="display: flex;">
    <div class="col-12">
      <fieldset class="form-group">
        <label class="form-label" for="input4">Votre ville de départ :</label>
   <input readonly type="text" id="r-depuis" name="villeD"  value="{{$reservation->villeDepart}}">
  </fieldset>
</div>
<div class="col-12">
  <fieldset class="form-group">
    <label class="form-label" for="input4">Votre ville d'arrivée' :</label>
   <input readonly type="text" id="r-vers" name="villeA"  value="{{$reservation->villeFin}}">
  </fieldset>
</div>
  </div>
  <div style="display: flex;">
    <div class="col-12">
      <fieldset class="form-group">
        <label class="form-label" for="input4">Date Voyage :</label>
   <input readonly type="date" id="r-vers" name="dateV"  value="{{$reservation->DateDepart}}">
  </fieldset>
</div>
   <input type="hidden" id="r-depuis" name="hD"  value="{{$reservation->heureDepart}}">
   <input type="hidden" id="r-vers" name="hA"  value="{{$reservation->heureFin}}">
   <input type="hidden" id="r-vers" name="p"  value="{{$reservation->prixPropose}}">
   <div class="col-12">
    <fieldset class="form-group">
      <label class="form-label" for="input4">Numero de train:</label>
   <input readonly type="text" id="r-vers" name="train"  value="{{$reservation->numeroTrain}}">
  </fieldset>
</div></div>
    {{-- <input type="email" value="{{ user['name'] }}"> --}}
 <div class="col-12">
  <fieldset class="form-group">
    
    <label class="form-label" for="input4">choisir le numero de place :</label>
    <select name="infoPlaceVoiture" id="infoPlaceVoiture" class="form-control">
        
         @foreach ($places as $v)
     {{-- <input type="hidden" name="" value=""> --}}
        <option name="voiture" value="place : {{ $v->idp}}, voiture {{ $v->id}}">place{{ $v->idp}}voiture{{ $v->id}}</option>
        
        
       
      @endforeach </select> 
    </fieldset>
  </div>
  <center>
    <a href=""><button class="btn btn-warning" style="width:300px;font-size:large;" name="search" type="submit">search</button>
    </a></center>
    
      <a href="/">    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
              <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
              <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
            </svg></a>
</form>

<style>
  .formm{
      
     
   }
   input{
       width: 300px;
       height: 50px;
       border: 1px solid blue;
       
   }
   .div1 button{
       border: 0;
   }
   h1{
       margin-left: 20px;
   }
   table { 
width: 750px; 
border-collapse: collapse; 
margin:50px auto;
}

/* Zebra striping */
tr:nth-of-type(odd) { 
background: #eee; 
}

th { 
background: #3498db; 
color: white; 
font-weight: bold; 
}

td, th { 
padding: 10px; 
border: 1px solid #ccc; 
text-align: left; 
font-size: 18px;
}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

table { 
     width: 100%; 
}

/* Force table to not be like tables anymore */
table, thead, tbody, th, td, tr { 
   display: block; 
}

/* Hide table headers (but not display: none;, for accessibility) */
thead tr { 
   position: absolute;
   top: -9999px;
   left: -9999px;
}

tr { border: 1px solid #ccc; }

td { 
   /* Behave  like a "row" */
   border: none;
   border-bottom: 1px solid #eee; 
   position: relative;
   padding-left: 50%; 
}

td:before { 
   /* Now like a table header */
   position: absolute;
   /* Top/left values mimic padding */
   top: 6px;
   left: 6px;
   width: 45%; 
   padding-right: 10px; 
   white-space: nowrap;
   /* Label the data */
   content: attr(data-column);

   color: #000;
   font-weight: bold;
}

}
.div2  button{
height: 30px !important;
background-color: yellowgreen;
border: 0;
}


body {
background-color: #ECEFF4;
}

*,
*:after,
*:before {
box-sizing: border-box;
}
.center-text{
text-align:center;
}
#form-main-container {
display: block;
position: relative;
background-color: #fff;
border-color: #d8e2e7;
border: 1px solid #e5e5e5;
border-radius: .25rem;
margin-top: 2rem;
margin-bottom: 2rem;
margin-left: auto;
margin-right: auto;
width: 80%;
padding: 1%;
}

#tabs {
position: relative;
width: 100%;
margin: 0 auto;
font-weight: 300;
font-size: 1.5rem;
text-align: center;
}

#tabs ul {
position: relative;
display: -ms-flexbox;
display: -webkit-flex;
display: -moz-flex;
display: -ms-flex;
display: -webkit-box;
display: flex;
margin: 0 auto;
padding: 0;
max-width: 90%;
list-style: none;
-webkit-box-orient: horizontal;
-webkit-flex-flow: row wrap;
-ms-flex-flow: row wrap;
flex-flow: row wrap;
-webkit-justify-content: center;
-moz-justify-content: center;
-ms-justify-content: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
}

#tabs ul li {
position: relative;
display: block;
width: 100%;
margin: 0.5%;
padding: 1%;
text-align: center;
flex: 1;
z-index: 1;
border-radius: 2%;
}

#tabs ul li a {
position: relative;
display: block;
color: #343434;
overflow: visible;
border-bottom: 1px solid rgba(0, 0, 0, 0.2);
transition: border 0.5s;
white-space: nowrap;
line-height: 2.5;
text-decoration: none;
outline: none;
}

#tabs ul li a:hover {
border-bottom: 1px solid rgba(0, 0, 0, 1);
transition: border 0.5s;
}

#tabs ul li.active-tab a:before {
position: absolute;
top: 100%;
left: 50%;
width: 0;
height: 0;
border: solid transparent;
content: '';
pointer-events: none;
border-width: 1rem;
border-top-color: rgba(0, 0, 0, 0.2);
margin-left: -1rem;
transition: border 0.5s;
}

#tabs ul li.active-tab a:hover:before {
border-top-color: rgba(0, 0, 0, 0.5);
transition: border 0.5s;
}

#tabs ul li.active-tab a:after {
position: absolute;
top: 100%;
left: 50%;
width: 0;
height: 0;
border: solid transparent;
content: '';
pointer-events: none;
border-width: 0.9rem;
border-top-color: #fff;
margin-left: -0.9rem;
}

#form-area {
position: relative;
overflow: hidden;
width: 100%;
font-weight: 300;
font-size: 1.2rem;
margin: 1rem;
margin-top: 2rem;
}

#form-title {
border-bottom: solid 1px #d8e2e7;
padding-bottom: .8rem;
width: 97%;
font-weight:600;
color:#8120a1;
}

#form-body {
margin-top: 2rem;
}

.col-3 {
float: left;
width: 30%;
margin: 1%;
padding: 1%;
}

.col-6 {
display: inline-block;
width: 62.5%;
margin: 1%;
padding: 1%;
}

.col-12 {
display: inline-block;
width: 95%;
margin: 1%;
padding: 1%;
}

.col-2 {
display: inline-block;
width: 17%;
margin: 1%;
padding: 1%;
}

.row {
display: block;
margin: 2%;
margin-top: 0;
padding: 2%;
padding-top: 0;
}

.left-align {
float: left;
}

.right-align {
float: right;
}

.button-area {
margin-top: 1%;
margin-right: 5%;
margin-left: 1%;
padding: 2%;
}

.button-save-area {
margin-top: 1%;
margin-left: 10%;
padding: 2%;
}

.form-group {
margin-bottom: 0.2rem;
}

fieldset {
border: 0;
padding: 0;
}

.form-label {
display: block;
margin-bottom: 6px;
font-size: 1rem;
}

label {
margin: 0;
display: block;
}

.form-control {
box-shadow: none;
font-size: 1rem;
color: #343434!important;
width: 100%;
padding: .375rem .75rem;
line-height: 1.5;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
-webkit-border-radius: .25rem;
border-radius: .25rem;
}
body{
 background-color: red;
 overflow-x: hidden;
}
textarea {
resize: none;
border: 0.1rem solid #ccc;
border-radius: 0.25rem;
width: 100%;
}

.btn {
-webkit-border-radius: 3px;
border-radius: 3px;
border: 1px solid #00a8ff;
background: #00a8ff;
color: #fff;
font-weight: 600;
display: inline-block;
padding: .375rem 1rem;
font-size: 1rem;
line-height: 1.5;
text-align: center;
vertical-align: middle;
cursor: pointer;
user-select: none;
}

/* .btn {
background-color: #8120A1;
border-color: #8120A1; */
/* } */

.btn-send {
background-color: #6b7a85;
border-color: #6b7a85;
}

.btn-save {
background-color: #6b7a85;
border-color: #6b7a85;
}
label{
color:#777;
font-weight:600;
text-transform:camel;
}
.form-control{
color:#777 !important;
border: 1px solid blue;
}
</style>