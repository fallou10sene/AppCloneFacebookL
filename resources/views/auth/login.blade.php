@extends('layouts.app')

@section('connexion')
<div class="col-md-1"></div>
   
        <div class="col-md-7" style="margin-top: 10px;">
            <div class="container-fluid">
                
                
                    <form method="POST" action="{{ route('login') }}" class="row">
                        @csrf

                        <div class="form-group col-md-4">
                            <label for="email" class="col-form-label">{{ __('Adresse e-mail ou mobile') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="password" class="col-form-label">{{ __('Mot de passe') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group col-md-4">
                            <div class="">
                                <button type="submit" class="btn btn-primary buttcon">
                                    {{ __('Connexion') }}
                                </button>

                               
                            </div>
                        </div>

                         <a class="btn btn-link butinf" href="{{ route('password.request') }}" style="">
                                    {{ __('Informations de compte oubliées ?') }}
                        </a>
                         </div>
                     </form>

                    
                
            </div>
        </div>
@endsection
@section('inscription')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                        
                    
                    <h2 style="font-weight: bolder; font-size: 36px;">Connexions récentes</h2>
                    <h3 style="font-weight: bolder; font-size: 16px;">Cliquez sur votre image ou sur Ajouter un compte.</h3>
                    </div>
                        <div class="row">
                        <div clas="col-md-6" >
                            <a href="login"><img src="images/fallou.jpg" alt="fallou" class="image_profil"></a>

                            
                        </div>
                        <div class="col-md-1">
                            
                        </div>
                        <div clas="col-md-5" >
                           <a href="login"><img src="images/inscrire.jpg" alt="fallou" class="image_profil"></a>

                            
                        </div>
                    
                        
                        
                        </div>
               
                </div>

                
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-4">
       
                
                    <h3 style="font-weight: bolder; font-size: 30px;">Créer un compte</h3>
                    <h4>C’est gratuit (et ça le restera toujours).</h4>
           
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('Prenom') }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="{{ __('Nom de Famille') }}">

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ __('Numero de mobile ou email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Nouveaux mot de passe') }}">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div>
                        <div class="form-group row">

                           <div class="col-md-6">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required >

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h6>Pourquoi indiquer ma date de naissance ?</h6>
                            </div>

                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="homme" type="radio" name="sexe" value="homme" required class="inscrinput" >
                                <label for="homme" class="inscrlabe">{{ __('Homme') }}</label>

                                
                           
                       

                            
                             
                                <input id="femme" type="radio" name="sexe" value="femme" required class="inscrinput" >
                                <label for="femme" class="inscrlabe">{{ __('Femme') }}</label>
                         

                                @if ($errors->has('sexe'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sexe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        </div>
                    
                        <p style="text-align: justify; font-size: 10px;">En cliquant sur Créer un compte, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies. Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.</p>
                        <div class="form-group row ">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary inscripbut" style="">
                                    {{ __('Inscription') }}
                                </button>
                            </div>
                            <div class="col-md-12 " >
                                
                            </div>
                        </div>
                    </form>    
        </div>
        <div class="col-md-2"></div>
    </div>
  
    </div>
</div>

@endsection
