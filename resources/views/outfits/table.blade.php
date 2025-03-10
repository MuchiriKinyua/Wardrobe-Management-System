<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="outfits-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Full Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($outfits as $outfit)
                <tr>
                    <td>{{ optional($outfit->user)->name ?? 'N/A' }}</td>
                    <td>{{ $outfit->full_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['outfits.destroy', $outfit->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('outfits.show', [$outfit->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('outfits.edit', [$outfit->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $outfits])
        </div>
    </div>
</div>
