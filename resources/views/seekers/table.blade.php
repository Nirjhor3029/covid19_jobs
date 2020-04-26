<div class="table-responsive">
    <table class="table" id="seekers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Area Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Nid</th>
        <th>Per Day Income</th>
        <th>Previous Experience</th>
        <th>Willingness To Travel</th>
        <th>Group Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seekers as $seeker)
            <tr>
                <td>{{ $seeker->user_id }}</td>
            <td>{{ $seeker->area_id }}</td>
            <td>{{ $seeker->name }}</td>
            <td>{{ $seeker->phone }}</td>
            <td>{{ $seeker->email }}</td>
            <td>{{ $seeker->nid }}</td>
            <td>{{ $seeker->per_day_income }}</td>
            <td>{{ $seeker->previous_experience }}</td>
            <td>{{ $seeker->willingness_to_travel }}</td>
            <td>{{ $seeker->group_id }}</td>
                <td>
                    {!! Form::open(['route' => ['seekers.destroy', $seeker->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seekers.show', [$seeker->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('seekers.edit', [$seeker->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
