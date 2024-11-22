<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Brand Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <header class="bg-dark text-white py-3 mb-4 shadow-sm">
        <div class="container">
            <h1 class="h3 mb-0">@yield('header', 'Brand Management')</h1>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
    <style>
        /* Labels for small screens */
        @media (max-width: 768px) {
            [data-label]:before {
                content: attr(data-label) ': ';
                font-weight: bold;
                display: block;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</body>

</html>