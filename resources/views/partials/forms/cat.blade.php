<div>
	{!! Form::label('name', 'Name') !!}
	<div class="form-controls">
		{!! Form::text('name', null, ['class' => 'form-controls']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('date_of_birth', 'Date of Birth') !!}
	<div class="form-controls">
		{!! Form::text('date_of_birth', null, ['class' => 'form-controls']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('breed_id', 'Breed') !!}
	<div class="form-controls">
		{!! Form::select('breed_id', $breeds, null, ['class' => 'form-controls']) !!}
	</div>
</div>
{!! Form::submit('Save Cat', ['class' => 'btn btn-primary']) !!}