<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/misc/favicon.ico" type="image/x-icon">
    <title>@yield('title', 'Corona/HIV/K9 Shop Center')</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional styles can be added here -->

    <!-- Bootstrap JavaScript and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Additional scripts can be added here -->
</head>
<body>

    <div class="container mt-4">
        @yield('content')

    </div>

{{--    located : resources/views/components/flash-message.blade.php--}}
{{--    php artisan make:component FlashMessage--}}

    <x-flash-message />
{{--=-=-=-=-=-=-=-=-=-=-=-=---}}

</body>
</html>
