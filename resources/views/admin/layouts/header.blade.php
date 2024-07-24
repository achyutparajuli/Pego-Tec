<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', config('app.name')) Dashboard</title>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    #sidebar {
        min-height: 100vh;
        position: fixed;
    }

    main {
        margin-left: 250px;
        padding: 20px;
    }

    footer {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        border-top: 1px solid #dee2e6;
    }

    .required::after {
        content: '*';
        color: red;
        margin-left: 0.25em;
        /* Adjust spacing as needed */
    }
</style>