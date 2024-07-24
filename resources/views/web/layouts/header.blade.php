<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', config('app.name'))</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .navbar-brand {
        font-weight: bold;
    }

    .navbar-nav .nav-item .nav-link {
        color: #343a40;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #007bff;
    }

    .container {
        margin-top: 100px;
    }

    .hero-image {
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: cover;
    }
</style>