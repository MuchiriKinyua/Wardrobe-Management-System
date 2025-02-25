<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Select a User']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select a Category']) !!}
</div>

<!-- Cloth Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cloth_name', 'Cloth Name:') !!}
    {!! Form::text('cloth_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand', 'Brand:') !!}
    {!! Form::text('brand', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::text('material', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Image Upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Upload Image:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
