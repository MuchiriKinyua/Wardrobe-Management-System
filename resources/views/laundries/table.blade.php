<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="laundries-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Clothing Item</th>
                <th>Washed At</th>
                <th>Detergent Used</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($laundries as $laundry)
                <tr>
                    <td>{{ optional($laundry->user)->name ?? 'N/A' }}</td>
                    <td>{{ optional($laundry->item)->cloth_name ?? 'N/A' }}</td>
                    <td>{{ $laundry->washed_at }}</td>
                    <td>{{ $laundry->detergent_used }}</td>
                    <td>{{ $laundry->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['laundries.destroy', $laundry->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('laundries.show', [$laundry->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('laundries.edit', [$laundry->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $laundries])
        </div>
    </div>
</div>
