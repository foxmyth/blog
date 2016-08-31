@extends('layouts.master')

@section('header')
	<h2>
		News And Events
		<small>{{ $event->title }}</small>
	</h2>
@endsection

@section('content')
	{!! Form::model($event, ['route' => ['admin.newsevents.update', $event->id]])!!}
		@include('partials.forms.newsEvent')
	{!! Form::close() !!}
@endsection