<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Menu
        </li>
        <li class="{{ (request()->routeIs('admin')) ? 'active-page' : '' }}">
            <a href="/admin"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="{{ (request()->is('/logbook')) ? 'active-page' : '' }}">
            <a href="/log"><i data-feather="book"></i>Log Books</a>
        </li>
        <li class="{{ (request()->routeIs('room.*')) ? 'active-page' : '' }}">
            <a href="index.html"><i data-feather="grid"></i>Room<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
                <li><a class="{{ (request()->is('room/add')) ? 'active' : '' }}" href="/room/add"><i class="far fa-circle"></i>Tambah Room</a></li>
                <li><a class="{{ (request()->is('room')) ? 'active' : '' }}" href="/room"><i class="far fa-circle"></i>Daftar Room</a></li>
                <li><a class="{{ (request()->is('room/video')) ? 'active' : '' }}" href="/room/video"><i class="far fa-circle"></i>Daftar Video</a></li>
            </ul>
        </li>
        <li class="{{ (request()->is('/home')) ? 'active-page' : '' }}">
            <a href="/home"><i data-feather="corner-down-left"></i>Guest Page</a>
        </li>
    </ul>
</div>
