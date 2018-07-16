@extends('layouts.app_1')
@section('content')

	<h1>Editer l'événement #{{ $event->id }}</h1>
	<form method="POST" action="{{route('events.update', $event)}}">

		{{ csrf_field()}}
		{{ method_field('PUT') }}

		<input type="text" placeholder=" Titre de l'événement " name="title" value=" {{ old('title') ?? $event->title }} "><br><br>

		{!! $errors->first('title', '<p class="error">:message</p>') !!}

		<textarea cols="30" rows="10"  placeholder=" Déscription de l'événement " name="description">{{ old('description') ?? $event->description }} </textarea><br><br>

		{!! $errors->first('description', '<p class="error">:message</p>') !!}


		<input type="submit" value="Modifier l'événement">
		
	</form>
	<p><a href="{{ route('home') }}"> Annuler </a></p>
		

@endsection