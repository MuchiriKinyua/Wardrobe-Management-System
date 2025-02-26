<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User:') !!}
    <td>{{ optional($item->user)->name ?? 'N/A' }}</td>
</div>

<!-- Action Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $log->action }}</p>
</div> -->

<!-- Table Name Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('table_name', 'Table Name:') !!}
    <p>{{ $log->table_name }}</p>
</div> -->

