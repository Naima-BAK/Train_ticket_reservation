@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/styleRegister.css') }}">

<div class="container" style="margin-top:120px;">
    <div class="body d-md-flex align-items-center justify-content-between">
        <div class="box-1 mt-md-0 mt-5"> 
            <img src="/images/reg2.jpg" class="" alt="">
         </div>
         <div class=" box-2 d-flex flex-column h-100">
         <div class="mt-5">
              <p class="mb-1 h-1">S'inscrire</p>


               <div class="d-flex flex-column ">
                            <form method="POST" action="{{ route('register') }}">
                                 @csrf

                                 <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
                            
                                    <div class="col-md-6">
                                        <input id="name" type="text" placeholder="votre nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="exemple@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{--  --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="*******" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <<div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmez le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="*******"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="{{ route('login') }}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("S'inscrire") }}
                                </button></a>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <div class="btn btn-primary"> Vous avez déjà un compte? 
                            <span class="fas fa-chevron-right ms-1"> </span>
                       <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
