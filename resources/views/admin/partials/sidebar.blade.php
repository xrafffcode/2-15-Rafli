<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="{{ Request::url() == url('/home') ? 'active' : ' ' }}">
                    <a href="chart.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Data Contact</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
