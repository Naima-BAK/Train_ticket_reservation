@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/styleLogin.css') }}">
<body>
    <div class="container">
<div class="d-flex justify-content-center h-100" style="margin-top: 140px;">

    <div class="card">
                     {{-- ****************************************** --}}
                 <div class="card-header">
                       <td><h3>Se connecter</h3></td>
                 </div>
        
                      {{-- ****************************************************** --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                      {{-- ************************************************ --}}
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
						   </div>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                      {{--************************************************************* --}}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>

                        {{-- ****************************************************************************** --}}
                                <div class="form-check">
                                    <div class="row align-items-center remember">
                                        <input class="checkb" type="checkbox">Remember Me
                                    </div>
                                </div>
                           
                       {{-- ******************************************************** --}}
                       
                                <div class="form-group">
                                    <input type="submit" value="Connexion" class="btn float-right login_btn">
                                </div>
                       {{-- ******************************************************* --}}

                                
                            
                        
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="{{ route('register') }}">S'inscrire</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-primary" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection
