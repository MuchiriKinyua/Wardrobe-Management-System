<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="items-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Category</th>
                <th>Cloth Name</th>
                <th>Color</th>
                <th>Size</th>
                <th>Brand</th>
                <th>Material</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->user->name ?? 'N/A' }}</td>
                    <td>{{ $item->category ? $item->category->full_name : 'N/A' }}</td>
                    <td>{{ $item->cloth_name }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->size }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->material }}</td>
                    <td>
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image" class="img-thumbnail" width="50">
                    @else
                        No Image
                    @endif
                    </td>

                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('items.show', [$item->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('items.edit', [$item->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $items])
        </div>
    </div>
</div>
