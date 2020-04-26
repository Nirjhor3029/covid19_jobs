<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('areas*') ? 'active' : '' }}">
    <a href="{{ route('areas.index') }}"><i class="fa fa-edit"></i><span>Areas</span></a>
</li>

<li class="{{ Request::is('givers*') ? 'active' : '' }}">
    <a href="{{ route('givers.index') }}"><i class="fa fa-edit"></i><span>Givers</span></a>
</li>

<li class="{{ Request::is('seekers*') ? 'active' : '' }}">
    <a href="{{ route('seekers.index') }}"><i class="fa fa-edit"></i><span>Seekers</span></a>
</li>

