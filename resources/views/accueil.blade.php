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
    <div class="container-fluid haut" class="fixed-top">
        
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
                    @if(auth()->user()->avatars)
                        <img src="storage/{{auth()->user()->avatars}}" class="rounded-circle img-fluid imageprofil">
                    @else
                        <img src="{{ asset('images/profil.jpg') }}" class="rounded-circle img-fluid imageprofil">         
                    @endif
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
    </div>
    <div class="container-fluid " style="margin-top:50px; text-align: center; ">
        <div class="row">
            <!-- contenue_gauche -->
            <div class="col-md-3" style="text-align: left; padding-left: 100px; font-family: times new roman;">
                <div class="sticky-top">
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
                            <a href="{{ route('groupe', $id )}}" class="menu_left">Groupes</a></h5>
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

            </div>
            <!-- contenue_milieu -->
            <div class="col-md-6 form-group">
                @if(session()->has('message'))
                    <h4 class="alert alert-success" >                                                      
                        {{ session()->get('message') }}                            
                    </h4>
                @endif
                
                <marquee><h1>Welcome {{auth()->user()->name.' '.auth()->user()->last_name}}  </h1></marquee>

                <div class="bg-white ">
                    <form method="POST" action="{{ route('publier') }}" enctype="multipart/form-data" >
                        @csrf
                         <div class="col-md-6 form-group">
                            @if($errors->all())
                                <div class="alert alert-danger">                                
                                    @foreach($errors->all() as $error)
                                       <li>{{ $error }} </li> 
                                    @endforeach                               
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="file" class="form-control form-group">
                        </div>
                         <div class="col-md-12 form-group">
                            <textarea class="form-control" name="title">{{old('title')}}</textarea>
                        </div>                       
                        <div class="col-md-6 form-group pb-2" >
                            <button type="submit" class=" btn btn-primary btn-block pull-center" style="">
                                Publier
                            </button>
                        </div>                       
                   </form>
                </div>

            <!-- Partie des news -->
                   
            @foreach($pub as $publication)

                <div class="bg-white " style="">

                    <p class="text-left p-3"> 
                        <!-- Photo profil de celui qui en a  et son nom et prenom-->
                        @if($publication->publications->avatars)
                            <img src="storage/{{$publication->publications->avatars}}" class="rounded-circle img-fluid imageprofil">
                            <span class="pnp">
                                {{$publication->publications->name.' '.$publication->publications->last_name}}
                            </span><br>
                            <span class="ml-3">
                                {{$publication->publications->created_at}}
                            </span>
                    </p>
                        @else
                        <!-- Fin Photo profil de celui qui en a -->
                        <!-- Photo profil de celui qui n'en a pas et son nom et prenom -->
                    <span class="text-left p-1">
                        <img src="{{ asset('images/profil.jpg') }}" class="rounded-circle img-fluid imageprofil">
                        <span class="pnp">
                            {{$publication->publications->name.' '.$publication->publications->last_name }} 
                        </span><br>
                        <span class="ml-3">
                            {{ $publication->publications->created_at}}
                        </span>
                    </span>
                        <!-- Fin Photo profil de celui qui n'en a pas et son nom et prenom-->
                        @endif
                    <p class=" "> 
                        <!-- titre de l'article au niveau du news -->
                        <span class="d-block text-left p-3">
                            {{$publication->title}} 
                        </span>
                        <!-- Fin titre de l'article au niveau du news -->
                        <!-- Photo de l'article news -->
                        <span class="d-block  p-3">
                            <img src="storage/{{ $publication->file }}">
                        </span>
                        <!-- Fin Photo de l'article news -->

                    </p>
                    <p class="text-center row ml-5 pb-2">
                        <span class="col-md-0"></span>
                        <a href="" class="col-md-3 text-center btn btn-success">
                             j'aime
                        </a>
                        <span class="col-md-1"></span> 
                        <a href="" class="col-md-3 text-center btn btn-success">
                             Commenter 
                        </a>
                        <span class="col-md-1"></span> 
                        <a href="" class="col-md-3 text-cente btn btn-success">
                             Partager 
                        </a>                            
                    </p>                       
                </div>
            @endforeach

            <!-- Fin Partie des news -->          
                    
            </div>
           
            <!-- Contacts  -->
            <div class="col-md-3">
            <div class="sticky-top">
                <div style="text-align: center;">    
                            
                </div>      
            
                <h5>Contacts</h5>
                
                <ul>
                    
                      @foreach($users as $user) 
                        <li>
                            <div class="container">
                                <div class="row">
                                    
                                    
                                        @if(auth()->user()->suit($user))
                                        @else
                                            <div class="col-md-6 text-left p-2">
                                                {{ $user->name.' '.$user->last_name }}
                                            </div>
                                        @endif  
                                    
                                    
                                    <div class="col-md-3">
                                     @if(auth()->user()->suit($user))
                                     @else
                                        <a href="{{ route('amie', $user)}}" class="btn btn-primary">
                                             Ajouter
                                        </a> 
                                     @endif       
                                    </div>
                                    <div class="col-md-3" >
                                        
                                    </div>
                                </div>
                            </div>                           
                        </li>
                      @endforeach
                </ul>
                <h5>Liste d' Amies</h5>

                      
                   @forelse(auth()->user()->amies as $amie) 
                        <li >
                            <div class="container">
                                <div class="row" >
                                    <div class="col-md-6 text-left p-2">
                                       {{ $amie->name.' '.$amie->last_name }}  
                                    </div>
                                   <div class="col-md-3">
                                        <form method="POST" action="{{ route('amie.delete', $amie)}} " class="p-1">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Bloquer</button>
                                            
                                        </form>
                                  </div>
                                    
                                   
                                    
                                </div>
                            </div>                           
                        </li>
                    @empty

                    <p>Vous n'avez pas d'amies</p>

                    @endforelse
                <a  href="{{ route('logout') }}">Déconnexion</a>
            </div>
        </div>
    </div>
    
    
</body>
</html>