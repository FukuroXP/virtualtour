<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Settings</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Help</a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <div class="logo">
            <a class="navbar-brand" href="/admin"></a>
        </div>
        <div class="" id="headerNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('circl/images/avatars/profile-image-1.png') }}" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
{{--                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>--}}
{{--                        <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>--}}
{{--                        <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>--}}
{{--                        <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>--}}
{{--                        <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
