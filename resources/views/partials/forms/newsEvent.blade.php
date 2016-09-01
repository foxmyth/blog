<div class="form-horizontal">
	<div class="form-group">
		{!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::text('title', null, ['class' => 'form-control']) !!}	
		</div>
	</div>	
	<div class="form-group">
		{!! Form::label('start_time', 'Open', ['class' => 'col-sm-2 control-label'])  !!}
		<div class="col-sm-4">
			{!! Form::date('start_time', $event->start_time->format('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
		{!! Form::label('end_time', 'Close', ['class' => 'col-sm-2 control-label'])  !!}
		<div class="col-sm-4">
			{!! Form::date('end_time', $event->end_time->format('Y-m-d'), ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('contents', 'Contents', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::textarea('contents', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-4">
			{!! Form::submit('update the news and Events', ['class' => 'btn btn-primary']) !!}
		</div>
		<div class="col-sm-6 text-right">
			{!! link_to('admin/newsevents', 'Back to the list >>', ['class' => 'text-muted']) !!}
		</div>
	</div>
</div>
