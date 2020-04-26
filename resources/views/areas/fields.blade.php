<!-- Upazilla Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('upazilla_id', 'Upazilla Id:') !!}
    {!! Form::number('upazilla_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bn Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bn_name', 'Bn Name:') !!}
    {!! Form::text('bn_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('areas.index') }}" class="btn btn-default">Cancel</a>
</div>
