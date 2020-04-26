<div class="table-responsive">
    <table class="table" id="areas-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Bn Name</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($areas as $index => $area)
            <tr>
                <td>{{ ( $index + 1 )}}</td>
                {{-- <td>{{ $area->upazilla_id }}</td> --}}
                <td>{{ $area->name }}</td>
                <td>{{ $area->bn_name }}</td>
                <td>{{ $area->url }}</td>
                <td>
                    {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('areas.show', [$area->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('areas.edit', [$area->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
