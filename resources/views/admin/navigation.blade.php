<ul class="navbar-nav navbar-sidenav" id="sideMenu">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#jobs" data-parent="#sideMenu">
            <i class="fa fa-fw fa-briefcase"></i>
            <span class="nav-link-text">Jobs</span>
        </a>
        <ul class="sidenav-second-level collapse" id="jobs">
            <li>
                <a class="active" href="#">Jobs - en</a>
            </li>
            <li>
                <a href="#">Jobs - sr</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#education" data-parent="#sideMenu">
            <i class="fa fa-fw fa-mortar-board"></i>
            <span class="nav-link-text">Education</span>
        </a>
        <ul class="sidenav-second-level collapse" id="education">
            <li>
                <a class="active" href="#">Education - en</a>
            </li>
            <li>
                <a href="#">Education - sr</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link">
            <i class="fa fa-fw fa-asterisk"></i>
            <span class="nav-link-text">Skills</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link">
            <i class="fa fa-fw fa-language"></i>
            <span class="nav-link-text">Languages</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">Personal info</span>
        </a>
    </li>
</ul>

