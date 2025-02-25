<!-- User Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $item->user->name ?? 'N/A' }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category:') !!}
    <p>{{ $item->category->full_name }}</p>
</div>

<!-- Cloth Name Field -->
<div class="col-sm-12">
    {!! Form::label('cloth_name', 'Cloth Name:') !!}
    <p>{{ $item->cloth_name }}</p>
</div>

<!-- Color Field -->
<div class="col-sm-12">
    {!! Form::label('color', 'Color:') !!}
    <p>{{ $item->color }}</p>
</div>

<!-- Size Field -->
<div class="col-sm-12">
    {!! Form::label('size', 'Size:') !!}
    <p>{{ $item->size }}</p>
</div>

<!-- Brand Field -->
<div class="col-sm-12">
    {!! Form::label('brand', 'Brand:') !!}
    <p>{{ optional($item->brand)->full_name ?? 'N/A' }}</p>
</div>

<!-- Material Field -->
<div class="col-sm-12">
    {!! Form::label('material', 'Material:') !!}
    <p>{{ optional($item->material)->full_name ?? 'N/A' }}</p>
</div>

<!-- Condition Field -->
<div class="col-sm-12">
    {!! Form::label('condition', 'Condition:') !!}
    <p>{{ optional($item->condition)->full_name ?? 'N/A' }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $item->day }}</p>
</div>

<!-- Show Image -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @if($item->image)
        <br>
        <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image" class="img-thumbnail" width="150">
    @else
        <p>No Image Uploaded</p>
    @endif
</div>


