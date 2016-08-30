@extends('layouts.master')

@section('header')
	<h2>News And Events - update</h2>
@endsection

@section('content')
	<h3><strong>{!! nl2br(e($event->title)) !!}</strong></h3>
@endsection