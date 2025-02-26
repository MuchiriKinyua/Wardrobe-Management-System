<!-- Clothing Item Id Field -->
<div class="col-sm-12">
    {!! Form::label('clothing_item_id', 'Clothing Item:') !!}
    <td>{{ optional($favorite->item)->cloth_name ?? 'N/A' }}</td>
</div>