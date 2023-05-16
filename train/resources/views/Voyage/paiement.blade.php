
<link rel="stylesheet" href="{{url('css\stylePaiement.css')}}">
<div class="container">
    <header>
    </header>
    <div class="card">
        <div class="top">
            <h2 style="color: red;font-size:larger;">Effectuer votre paiement</hfa-stack-2x>
            <hr>
        </div>
        <div class="card-details"> <input type="text" placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size="19"> <span>Numero de la carte</span> <i class="fa fa-credit-card"></i> </div>
        <div class="exp-cvv">
            <div class="card-details"> <input type="text" placeholder="mm/yyyy" data-slots="my"> <span>Date d'expiration </span> <i class="fa fa-calendar"></i> </div>
            <div class="card-details"> <input type="text" placeholder="000" data-slots="0" data-accept="\d" size="3"> <span>CVV</span> <i class="fa fa-info-circle"></i> </div>
        </div>
        <div class="button" style="margin-top: 60px;"> 
            <form action="/billet" method="get">
                     {{-- <a href="/billet">  --}}
                        <input type="text" name="ID" value="{{$reservation->id}}" hidden>
                         <button type="submit" style="width:300px;font-size:large;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                          </svg>Payer</button>
                        </form>
                    </div>
                    <div class="exp-cvv">
                    <a href="/">    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
                            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
                          </svg></a>
                    </div>
    </div>


    <div class="card" style="margin-left: 10px;width: 500px ! important;">
        <div class="top">
            <h2 style="color: red;font-size:larger;">Votre voyage</h2>
            <hr>
        </div>
        
        <div class="card-details" >
             <input type="text"  data-slots="0" data-accept="\d" size="19" value="{{$reservation->nomUser}}" disabled>
              <span>Nom du client</span> 
              <i class="fa fa-credit-card"></i>
        </div>
        <br>
        <hr>
        <br>
        <div class="card-details" >
            <input type="text"  data-slots="0" data-accept="\d" size="19" value="TRAIN_IN"disabled>
             <span>Nom du Marchand</span> 
             <i class="fa fa-credit-card"></i>
       </div>
      <br>
      <hr>
      
       <div class="exp-cvv">
        <div class="card-details"> <input type="text"  data-slots="my" value="{{$reservation->prixPropose}}" disabled> <span>Montant</span> <i class="fa fa-calendar"></i> </div>
    </div>
       
        

    </div>