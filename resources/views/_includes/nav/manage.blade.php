<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu">
            <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu">
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li><a href="#" class="has-submenu ">Roles &amp; Permissions</a>
            <ul class="submenu">
                <li><a href="{{route('roles.index')}}" class="">Roles</a></li>
            </ul>
            </li>
        </ul>
    </aside>
</div>