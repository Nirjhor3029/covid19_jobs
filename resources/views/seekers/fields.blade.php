<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', 0, ['class' => 'form-control', 'placeholder' => "0 is the default value"]) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::number('area_id', 0, ['class' => 'form-control', 'placeholder' => "0 is the default value"]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nid', 'Nid:') !!}
    {!! Form::text('nid', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Day Income Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_day_income', 'Per Day Income:') !!}
    {!! Form::number('per_day_income', null, ['class' => 'form-control']) !!}
</div>

<!-- Previous Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previous_experience', 'Previous Experience:') !!}
    {!! Form::number('previous_experience', null, ['class' => 'form-control']) !!}
</div>

<!-- Willingness To Travel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('willingness_to_travel', 'Willingness To Travel:') !!}
    {!! Form::number('willingness_to_travel', null, ['class' => 'form-control']) !!}
</div>

<!-- Group Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Group Id:') !!}
    {!! Form::number('group_id', 0, ['class' => 'form-control', 'placeholder' => "0 is the default value"]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('seekers.index') }}" class="btn btn-default">Cancel</a>
</div>
