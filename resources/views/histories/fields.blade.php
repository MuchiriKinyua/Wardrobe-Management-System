<!-- Clothing Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clothing_item_id', 'Clothing Item:') !!}
    {!! Form::select('clothing_item_id', $clothing_items, null, ['class' => 'form-control', 'placeholder' => 'Select a Cloth']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>