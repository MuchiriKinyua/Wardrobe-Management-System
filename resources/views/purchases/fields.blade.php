<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Select a User']) !!}
</div>

<!-- Clothing Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clothing_item_id', 'Clothing Item:') !!}
    {!! Form::select('clothing_item_id', $clothing_items, null, ['class' => 'form-control', 'placeholder' => 'Select a Cloth']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Purchased At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchased_at', 'Purchased At:') !!}
    {!! Form::text('purchased_at', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Store Field -->
<div class="form-group col-sm-6">
    {!! Form::label('store', 'Store:') !!}
    {!! Form::text('store', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>