<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white">
    <div class="sidebar-header">
        <h4 class="text-center">{{ config('app.name') }}</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.users.index') }}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.pages.index') }}">Pages</a>
        </li>
    </ul>
</nav>