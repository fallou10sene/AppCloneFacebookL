<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<div class="container-fluid haut">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-1" style="margin-top: 05px; " >
                <img src="images/facebook.jpg" style="border-radius: 3px;">
            </div>
            <div class="col-md-4" style="margin-top: 07px; ">
                <input type="recherch" placeholder="{{Auth::user()->name}}"   class="form-control btn-block">
            </div>
            
            <div class="col-md-1">
                <img src="images/profil.jpg" class="rounded-circle img-fluid" style="width: 30px; height: 30px; margin: 10px;">
                
            </div>
            <div class="col-md-4" style="">
                
                    <div class="col-md-2" style="display: inline-block; margin-top: 20px; margin-left: -20px;">
                        <h6>
                            <a href="{{ route('edit', $id)}}" class="text-white">{{Auth::user()->name}}</a>
                        </h6>
                    </div>
                
                    <div  class="ac_accueil col-md-2" style="">
                        Accueil
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
     		<div class="col-md-3" style="text-align: left; padding-left: 100px; font-family: times new roman;">
     			@yield('gauche')
     		</div>
     		<div class="col-md-6 form-group">
     			@yield('milieu')
     		</div>
     		<div class="col-md-3">
     			@yield('droite')
     		</div>
     	</div>
    </div>

     <script type="js/bootstrap.min.js"></script>
    <script type="js/popper.min.js"></script>

</body>
</html>