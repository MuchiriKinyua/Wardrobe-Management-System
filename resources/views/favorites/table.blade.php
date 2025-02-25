<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="favorites-table">
            <thead>
            <tr>
                <th>Clothing Item Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($favorites as $favorite)
                <tr>
                    <td>{{ $favorite->clothing_item_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['favorites.destroy', $favorite->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('favorites.show', [$favorite->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('favorites.edit', [$favorite->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $favorites])
        </div>
    </div>
</div>
