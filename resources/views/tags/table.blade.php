<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tags-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Full Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ optional($tag->user)->name ?? 'N/A' }}</td>
                    <td>{{ $tag->full_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tags.show', [$tag->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tags.edit', [$tag->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $tags])
        </div>
    </div>
</div>
