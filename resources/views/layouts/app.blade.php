<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.8-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js')}}"></script>
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .hero-banner {
            background: linear-gradient(135deg, #2b5876 0%, #4e4376 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
            text-align: center;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        main {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header>
        @include('partials.header')
    </header>

    <!-- Main Content -->
    <main>
        <div class="container py-5">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>

</html>