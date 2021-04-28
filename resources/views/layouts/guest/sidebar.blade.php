<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Room Terbaru
        </li>
        @foreach($Rrooms as $room)
            <li>
                <a href="/home/log/{{ $room->id }}"><i data-feather="home"></i>{{ $room->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
