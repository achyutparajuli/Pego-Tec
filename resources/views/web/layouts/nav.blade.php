<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('web.home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5" id="navbarNav">
        <ul class="navbar-nav ml-5">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.home') }}">Home</a>
            </li>
            @foreach($pages as $page)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.pages.show',$page->slug) }}">{{ $page->name }}</a>
            </li>
            @endforeach
        </ul>
        <ul class="navbar-nav ml-auto">
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="#">Hi, {{ Auth::User()->name }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.index') }}">Login</a>
            </li>
            @endif
        </ul>
    </div>
</nav>