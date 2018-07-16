@extends('layouts.app_1')
@section('content')

	<h1>Créer un événement</h1>
	<form method="POST" action="{{route('events.store')}}">

		{{ csrf_field()}}

		<input type="text" placeholder=" Titre de l'événement " name="title"><br><br>

		{!! $errors->first('title', '<p class="error">:message</p>') !!}

		<textarea cols="30" rows="10"  placeholder=" Déscription de l'événement " name="description"></textarea><br><br>

		{!! $errors->first('description', '<p class="error">:message</p>') !!}


		<input type="submit" value="Creer un événement">
		
	</form>
	<p><a href="{{ route('home') }}"> Annuler </a></p>
		

@endsection