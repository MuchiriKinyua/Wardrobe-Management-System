<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="days-table">
            <thead>
            <tr>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($days as $days)
                <tr>
                    <td>{{ $days->monday }}</td>
                    <td>{{ $days->tuesday }}</td>
                    <td>{{ $days->wednesday }}</td>
                    <td>{{ $days->thursday }}</td>
                    <td>{{ $days->friday }}</td>
                    <td>{{ $days->saturday }}</td>
                    <td>{{ $days->sunday }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['days.destroy', $days->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('days.show', [$days->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('days.edit', [$days->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $days])
        </div>
    </div>
</div>
