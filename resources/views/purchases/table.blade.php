<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="purchases-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Clothing Item</th>
                <th>Price</th>
                <th>Purchased At</th>
                <th>Store</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->user_id }}</td>
                    <td>{{ $purchase->clothing_item_id }}</td>
                    <td>{{ $purchase->price }}</td>
                    <td>{{ $purchase->purchased_at }}</td>
                    <td>{{ $purchase->store }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['purchases.destroy', $purchase->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('purchases.show', [$purchase->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('purchases.edit', [$purchase->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $purchases])
        </div>
    </div>
</div>
