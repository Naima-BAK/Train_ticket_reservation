
@extends('layouts.app')


@section('content')
<link rel="stylesheet" href='{{ url('css/styleFooter.css') }}'>
<footer class="foot">
  <center> <a class="navbar-brand" rel="nofollow" target="_blank" href="" style="text-transform: uppercase;"> 
    <img  class="logo" src="/images/log.png" alt="" >
  </a>
  <h3 > Train_IN</h3>
                
  <div class="header">
    <nav>
         <ul class="nav-links">
            <li> <a href="">Home</a></li>
            <li> <a href="">About</a></li>
            <li> <a href="">Témoignages</a></li>
            <li> Contact</li>
            <li ><a href="">Sing in</a></li>
        </ul>
    </nav>
</div>




  <table class="tab">
      <tr>
          <td><img src="images/wts.png" height="40" width="40"> </td>
          <td><img src="images/yb.png" height="40" width="40"></td>
          <td><img src="images/inst.png" height="40" width="40"></td>
          <td><img src="images/fb.png" height="40" width="40"></td>
          <td><img src="images/twitter.png" height="40" width="40"></td>
          <td><img src="images/gmail.png" height="40" width="40"></td>
          <td><img src="images/phone.png" height="40" width="40"></td>
      </tr>
  </table></center> 


</footer>
  @endsection