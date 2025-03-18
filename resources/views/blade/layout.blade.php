<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Welcome to Blade Layout</h1>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
