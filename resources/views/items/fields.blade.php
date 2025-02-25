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

<!-- Colors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', [
    'Red' => 'Red',
    'Orange' => 'Orange',
    'Yellow' => 'Yellow',
    'Green' => 'Green',
    'Blue' => 'Blue',
    'Indigo' => 'Indigo',
    'Violet' => 'Violet'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select a Color']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand', 'Brand:') !!}
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control', 'placeholder' => 'Select a Brand']) !!}
</div>

<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::select('material_id', $materials, null, ['class' => 'form-control', 'placeholder' => 'Select a Material']) !!}
</div>

<!-- Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition', 'Condition:') !!}
    {!! Form::select('condition_id', $conditions, null, ['class' => 'form-control', 'placeholder' => 'Select a Condition']) !!}
</div>

<!-- Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::select('day', [
    'Monday' => 'Monday',
    'Tuesday' => 'Tuesday',
    'Wednesday' => 'Wednesday',
    'Thursday' => 'Thursday',
    'Friday' => 'Friday',
    'Saturday' => 'Saturday',
    'Sunday' => 'Sunday'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select a Day']) !!}
</div>

<!-- Image Upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Upload Image:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>
