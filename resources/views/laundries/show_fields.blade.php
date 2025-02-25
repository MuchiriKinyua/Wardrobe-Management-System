<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $laundry->user_id }}</p>
</div>

<!-- Clothing Item Id Field -->
<div class="col-sm-12">
    {!! Form::label('clothing_item_id', 'Clothing Item Id:') !!}
    <p>{{ $laundry->clothing_item_id }}</p>
</div>

<!-- Washed At Field -->
<div class="col-sm-12">
    {!! Form::label('washed_at', 'Washed At:') !!}
    <p>{{ $laundry->washed_at }}</p>
</div>

<!-- Detergent Used Field -->
<div class="col-sm-12">
    {!! Form::label('detergent_used', 'Detergent Used:') !!}
    <p>{{ $laundry->detergent_used }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $laundry->notes }}</p>
</div>

