@extends('layouts.master')

@section('header')
	<h2>Edit a Cat</h2>
@endsection

@section('content')	
	{!! Form::model($cat, ['url' => '/cats/'.$cat->id]) !!}
		@include('partials.forms.cat')
	{!! Form::close() !!}
@endsection