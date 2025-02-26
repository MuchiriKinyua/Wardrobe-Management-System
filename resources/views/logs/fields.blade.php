<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Select a User']) !!}
</div>

<!-- Action Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('action', 'Action:') !!}
    {!! Form::text('action', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div> -->

<!-- Table Name Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('table_name', 'Table Name:') !!}
    {!! Form::text('table_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div> -->