<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.header')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.nav')
            <!-- Main Content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Top Bar -->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div>
                        <span class="mr-3">Hi, {{ Auth::User()->name }}</span>
                        <a href="{{ route('logout') }}" class="btn btn-outline-primary">Logout</a>
                    </div>
                </div>

                <!-- Content -->
                <div class="container">
                    @yield('section')
                </div>
            </main>
        </div>
    </div>

    @include('admin.layouts.footer')
</body>

</html>