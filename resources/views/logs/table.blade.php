<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="logs-table">
        <thead>
<tr>
    <th>User</th>
    <th>Item</th>
    <th>Category</th>
    <th>Action</th>
    <th>Description</th>
    <th>Table Name</th>
    <th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@foreach($logs as $log)
    <tr>
        <td>{{ optional($log->user)->name ?? 'N/A' }}</td>
        <td>{{ optional($log->item)->cloth_name ?? 'N/A' }}</td>
        <td>{{ $log->category }}</td>
        <td>{{ $log->action }}</td>
        <td>{{ $log->description }}</td>
        <td>{{ $log->table_name }}</td>
        <td style="width: 120px">
            {!! Form::open(['route' => ['logs.destroy', $log->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{{ route('logs.show', [$log->id]) }}"
                   class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
                <a href="{{ route('logs.edit', [$log->id]) }}"
                   class='btn btn-default btn-xs'>
                    <i class="far fa-edit"></i>
                </a>
                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
</tbody>

        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $logs])
        </div>
    </div>
</div>
