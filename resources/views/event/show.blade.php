@extends('layouts.app_1')
@section('content')

	<h1> {{ $event->title }}</h1>
	<p>{{ $event->description }}</p>

	<a href="{{ route('events.edit', $event) }}">Modifier</a> |
	<form action="{{ route('events.destroy', $event) }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<input type="submit" value="Supprimer">
	</form>
	<a href="{{ route('home') }}">Afficher tous les événements</a>
		

@endsection