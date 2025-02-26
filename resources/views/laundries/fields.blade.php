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

<!-- Washed At Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('washed_at', 'Washed At:') !!}
    {!! Form::text('washed_at', null, ['class' => 'form-control','id'=>'washed_at']) !!}
</div> -->

@push('page_scripts')
    <script type="text/javascript">
        $('#washed_at').datepicker()
    </script>
@endpush

<!-- Detergent Used Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detergent_used', 'Detergent Used:') !!}
    {!! Form::text('detergent_used', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>