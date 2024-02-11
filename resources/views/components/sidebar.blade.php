<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">POS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">POS</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>

            </li> --}}
            {{-- <li class= "menu-header {{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li> --}}
            <li class="nav-item dropdown {{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>


            </li>
            <li class='nav-item dropdown {{ Request::is('users') ? 'active' : '' }}'>
                <a class="nav-link" href="{{ route('users.index') }}"><i class="far fa-user"></i><span>Users</a>
            </li>

        </ul>
    </aside>
</div>
