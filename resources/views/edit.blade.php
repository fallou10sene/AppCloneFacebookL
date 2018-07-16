<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color: #eaebef; ">
    <div class="container-fluid haut">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-1" style="margin-top: 05px; " >
                <a href="{{ route('accueil') }}">
                    <img src=" {{ asset('images/facebook.jpg') }} " style="border-radius: 3px;">
                </a>
            </div>
            <div class="col-md-4" style="margin-top: 07px; ">
                <input type="recherch" placeholder="Recherche"   class="form-control btn-block">
            </div>

            
            <div class="col-md-0">
                <a href="{{ route('edit', $id)}}" class="text-white">

                    <img src="{{ asset('images/profil.jpg') }}" class="rounded-circle img-fluid" 
                    style="width: 30px; height: 30px; margin: 10px;">
                </a>
            </div>
            

            <div class="col-md-4" style="">

                
                    <div class="col-md-2" style="display: inline-block; margin-top: 20px; margin-left: -20px;">
                        <h6>
                            {{auth()->user()->name}}
                        </h6>
                    </div>
                
                    <div  class="ac_accueil col-md-2" style="">
                        <a href="{{ route('accueil') }}" style="color: white">
                            Accueil
                        </a>
                    </div>
                
                <div class="dropdown" style="display: inline-block; padding-left:20px;">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color: #4367b1; border:none; margin-top: 8px;">
                            <i class="fa fa-user" ></i>
                        </button>


                        <div class="dropdown-menu">
                            
                                
                            
                                <div class=" dropdown-item" >

                                    <ul class="ami">
                    
                                      @foreach($users as $user) 
                                        <li>{{ $user->name.' '.$user->last_name }}

                                            <a href="{{ route('amie', $user) }}">Ajouter</a>
                                            <a href="">Supprimer</a>

                                        </li>
                                      @endforeach
                    
                                    </ul>
                        
                                </div>
                                   
                        </div>
                </div>
                <div class="dropdown" style="display: inline-block; margin-top:10px;">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color: #4367b1; border:none;">
                           
                         
                        </button>
                        <div class="dropdown-menu" >
                                    <div class="dropdown-item"  >
                                        <div class=" " style="padding-bottom: 20px;"  >
                                            <a href="" >Creer un groupe</a>
                                        </div>
                                        <div class=" " style="padding-bottom: 20px;" >
                                            <a href="">Creer une page</a>
                                        </div>
                                        
                                        <div class=" " style="padding-bottom: 20px;">
                                            <a href="{{ route('logout') }}">Déconnexion</a>
                                        </div>
                                        
                                    </div>
                        </div>               
                </div>  
            </div>
            <div class="col-md-1" style="">
            </div>  
        </div>  
    </div>
    <div class="container-fluid " style="margin-top:50px; text-align: center; ">
        <div class="row">
            <!-- contenue_gauche -->
            <div class="col-md-3" style="text-align: left; padding-left: 100px; font-family: times new roman;">
                <h5>
                    
                    </h5>
                <div class="menu_gauche">

                        <h5><img src="{{ asset('images/actualites.png') }}">
                            <a href="groupe.php" class="menu_left" >Fil d'actualité ...</a></h5>
                        <h5><img src="{{ asset('images/messenger.png') }}" >
                            <a href="groupe.php" class="menu_left" >Messenger</a></h5>
                        <h6><a href="groupe.php" class="menu_left_titre">Raccourcis </a></h6>
                        <h5><img src="{{ asset('images/volkeno.png') }}" >
                            <a href="groupe.php" >Volkeno </a></h5>
                        <h5><img src="{{ asset('images/interaktive.png') }}">
                            <a href="groupe.php" class="menu_left">Interaktive </a></h5>
                        <h5><img src="{{ asset('images/afficher_plus.png') }}">
                            <a href="groupe.php" class="menu_left_plus" style="color: blue;">Voir plus ... </a></h5>
                        <h6><a href="groupe.php" class="menu_left_titre">Parcourir </a></h6>
                        <h5><img src="{{ asset('images/evenement.png') }}">
                            <a href="groupe.php" class="menu_left">Evénements </a></h5>
                        <h5><img src="{{ asset('images/groupe.png') }}">
                            <a href="groupe.php" class="menu_left">Groupes</a></h5>
                        <h5><img src="{{ asset('images/page.png') }}" >
                            <a href="groupe.php" class="menu_left">Pages </a></h5>
                        <h5><img src="{{ asset('images/liste.png') }}">
                            <a href="groupe.php" class="menu_left">Listes d'amis </a></h5>
                        <h5><img src="{{ asset('images/afficher_plus.png') }}">
                            <a href="groupe.php" class="menu_left_plus" style="color: blue;">Voir plus </a></h5>
                        <h6><a href="groupe.php" class="menu_left_titre">Créer</a></h6>
                        <h5 class="menu_left_plus">
                            <a href="groupe.php" class="menu_left" style="color: blue;">Publicité .  </a>
                            <a href="groupe.php" class="menu_left" style="color: blue;">Page .  </a>
                            <a href="groupe.php" class="menu_left" style="color: blue;">Groupe .  </a>
                        </h5>
                        <h5 ><a href="groupe.php" class="menu_left_plus" style="color: blue;">Evenement </a></h5>
                </div>

            </div>
            <!-- contenue_milieu -->
            <div class="col-md-6 form-group">
                <form method="POST" action="{{ route('update',$id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ auth()->user()->name }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                            <div class="col-md-6 mb-4">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ auth()->user()->last_name }}">

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-4">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ auth()->user()->email }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-4">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Nouveaux mot de passe') }}">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-4">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">

                           <div class="col-md-12">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ auth()->user()->date }}" >

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <input 
                                        id="avatar" 
                                        type="file" 
                                        class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" 
                                        name="avatar" 
                                        value="{{ auth()->user()->avatar }}">

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <div class="col-md-12 text-left">
                                <input id="homme" type="radio" name="sexe" value="homme" required class="mr-2" >
                                <label for="homme" class="inscrlabe mr-2">{{ __('Homme') }}</label>
                                                       
                                <input id="femme" type="radio" name="sexe" value="femme" required class="mr-2" >
                                <label for="femme" class="inscrlabe mr-2">{{ __('Femme') }}</label>
                           
                                @if ($errors->has('sexe'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sexe') }}</strong>
                                    </span>
                                @endif
                            </div>                        
                        </div>


                        <div class="form-group row ">
                            <div class="col-md-4 inscrbutton" style="">
                                <button type="submit" class="btn btn-primary inscrbutton form-control">
                                    {{ __('Modifier Votre Profil') }}
                                </button>
                            </div>
                        </div>
                </form>                    
            </div>
           
            <!-- Contacts  -->
            <div class="col-md-3">

                
                <a  href="{{ route('logout') }}">Déconnexion</a>
            </div>
        </div>
    </div>
    
    
</body>
</html>

                    
                
