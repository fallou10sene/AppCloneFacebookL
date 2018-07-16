@extends('layouts.app_1')
@section('content')

	<h1>{{ $event->count() }} {{ str_plural('Evenement', $event->count()) }}  </h1>
	<a href="{{ route('events.create')}}">Créer un événement</a>
		@if($event->count() > 0)
			<ul>
				@foreach($event as $events)
					<li><a href="{{ route('events.show', $events) }}">{{ $events->title }}</a></li>
				@endforeach
			</ul>
		@else
			<p>Aucun événement pour le moment</p>
		@endif

@endsection