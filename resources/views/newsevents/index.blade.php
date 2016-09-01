@extends('layouts.master')

@section('header')
	<h2>News And Events</h2>
@endsection

@section('content')
	{{-- Start row --}}
	<div class="row">
		@foreach ($events as $event)
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">
						@php
							$time = time() - strtotime($event->start_time);
							$time = $time / 60 / 60 / 24;
						@endphp
						@if ( $time > 0 && $time <= 7 )
							<span class="label label-danger">New</span>
						@elseif ( $time < 0 )
							<span class="label label-info">Comming Soon</span>
						@endif
						<h3><strong>{!! nl2br(e($event->title)) !!}</strong></h3>
						<p> {!! htmlspecialchars_decode($event->contents) !!}</p>
						<p>
							<small>
								<strong>open</strong> : {{ $event->start_time->format('d F, Y') }}<br />
								<strong>close</strong> : 
									@if ($event->end_time->format('Y') == '9999')
										Not defined
									@else
										{{ $event->end_time->format('d F, Y') }}
									@endif
							</small>
						</p>
						<p class="text-right">
							<a href="{{ url('admin/newsevents/'.$event->id.'/edit') }}" class="btn btn-primary btn-xs" role="button">update</a>
						</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	{{-- End row --}}
	<div class="col-sm-10 col-md-12 text-center">
		{{ $events->links() }}
	</div>

@endsection