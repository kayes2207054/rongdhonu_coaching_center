<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rongdhonu Coaching Center - Since 1986</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .section-title {
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
            color: #333;
            text-transform: uppercase;
        }
        .section-padding {
            padding: 80px 0;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 40px 0 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                <i class="bi bi-rainbow"></i> Rongdhonu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#publicNavbar" aria-controls="publicNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teachers">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#notices">Notices</a></li>
                    <li class="nav-item"><a class="nav-link" href="#results">Results</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link btn btn-outline-primary btn-sm ms-2" href="{{ route('home') }}">Admin Panel</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link btn btn-primary btn-sm text-white ms-2" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container text-center">
            <h5 class="fw-bold"><i class="bi bi-rainbow"></i> Rongdhonu Coaching Center</h5>
            <p>Empowering Students Since 1986</p>
            <div class="mb-3">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-4"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
            </div>
            <hr class="bg-secondary">
            <p class="mb-0 text-secondary">&copy; {{ date('Y') }} Rongdhonu Coaching Center. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
