<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('areas*') ? 'active' : '' }}">
    <a href="{{ route('areas.index') }}"><i class="fa fa-edit"></i><span>Areas</span></a>
</li>

<li class="{{ Request::is('givers*') ? 'active' : '' }}">
    <a href="{{ route('givers.index') }}"><i class="fa fa-edit"></i><span>Givers</span></a>
</li>

