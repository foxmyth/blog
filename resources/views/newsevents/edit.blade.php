@extends('layouts.master')

@section('header')
	<h2>News And Events</h2>
@endsection

@section('content')
	{!! Form::model($event, ['url' => 'admin/newsevents/'.$event->id, 'method' => 'put'])!!}
		@include('partials.forms.newsEvent')
	{!! Form::close() !!}
@endsection