<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Home
        </li>
        <li class="{{ (request()->routeIs('home')) ? 'active-page' : '' }}">
            <a href="/home"><i data-feather="home"></i>Home</a>
        </li>
       @auth
            <li class="{{ (request()->is('/admin')) ? 'active-page' : '' }}">
                <a href="/admin"><i data-feather="corner-down-right"></i>Admin Page</a>
            </li>
        @endauth
        <li class="sidebar-title">
            Room Terbaru
        </li>
        @foreach($Rrooms as $room)
            <li>
                <a href="/home/log/{{ $room->id }}"><i data-feather="grid"></i>{{ $room->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
