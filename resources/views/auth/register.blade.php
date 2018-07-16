@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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

                           <div class="col-md-12">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required >

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
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
                    
                        <p style="text-align: justify;">En cliquant sur Créer un compte, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies. Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.</p>
                        
                        <!-- <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div> -->


                        <div class="form-group row ">
                            <div class="col-md-4 inscrbutton" style="background-color: green;">
                                <button type="submit" class="btn btn-primary inscrbutton">
                                    {{ __('Inscription') }}
                                </button>
                            </div>
                        </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
