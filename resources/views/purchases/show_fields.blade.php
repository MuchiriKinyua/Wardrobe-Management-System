<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $purchase->user_id }}</p>
</div>

<!-- Clothing Item Id Field -->
<div class="col-sm-12">
    {!! Form::label('clothing_item_id', 'Clothing Item Id:') !!}
    <p>{{ $purchase->clothing_item_id }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $purchase->price }}</p>
</div>

<!-- Purchased At Field -->
<div class="col-sm-12">
    {!! Form::label('purchased_at', 'Purchased At:') !!}
    <p>{{ $purchase->purchased_at }}</p>
</div>

<!-- Store Field -->
<div class="col-sm-12">
    {!! Form::label('store', 'Store:') !!}
    <p>{{ $purchase->store }}</p>
</div>

