<div class="table-responsive">
    <table class="table" id="givers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Area Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Nid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($givers as $giver)
            <tr>
                <td>{{ $giver->user_id }}</td>
            <td>{{ $giver->area_id }}</td>
            <td>{{ $giver->name }}</td>
            <td>{{ $giver->phone }}</td>
            <td>{{ $giver->email }}</td>
            <td>{{ $giver->nid }}</td>
                <td>
                    {!! Form::open(['route' => ['givers.destroy', $giver->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('givers.show', [$giver->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('givers.edit', [$giver->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
