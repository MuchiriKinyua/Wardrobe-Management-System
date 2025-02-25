<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="histories-table">
            <thead>
            <tr>
                <th>Clothing Item</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($histories as $history)
                <tr>
                    <td>{{ $history->clothing_item_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['histories.destroy', $history->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('histories.show', [$history->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('histories.edit', [$history->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $histories])
        </div>
    </div>
</div>
