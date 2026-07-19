<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rongdhonu Coaching Center - Since 1986</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700,800" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="{{ url('/') }}">
                <i class="bi bi-rainbow text-gradient"></i> Rongdhonu
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#publicNavbar" aria-controls="publicNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNavbar">
                <ul class="navbar-nav ms-auto align-items-center gap-2">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#teachers">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#notices">Notices</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#results">Results</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#contact">Contact</a></li>
                    @auth
                        <li class="nav-item ms-lg-2"><a class="btn btn-outline-primary px-3 rounded-pill fw-semibold" href="{{ route('home') }}">Admin Panel</a></li>
                    @else
                        <li class="nav-item ms-lg-2"><a class="btn btn-primary px-4 rounded-pill fw-semibold shadow-sm text-white" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row g-4 pb-4">
                <div class="col-lg-4 col-md-6 mb-3">
                    <h5 class="fw-bold mb-3"><i class="bi bi-rainbow text-primary me-2"></i>Rongdhonu Coaching</h5>
                    <p class="small text-muted mb-4">Empowering students with premier education, dedicated mentorship, and proven success strategies since 1986.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="social-icon-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon-btn" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6 mb-3">
                    <h6 class="text-white fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                        <li><a href="#home" class="footer-link">Home</a></li>
                        <li><a href="#about" class="footer-link">About Us</a></li>
                        <li><a href="#courses" class="footer-link">Our Courses</a></li>
                        <li><a href="#teachers" class="footer-link">Faculty</a></li>
                        <li><a href="#notices" class="footer-link">Notices</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <h6 class="text-white fw-bold mb-3">Student Hub</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                        <li><a href="#results" class="footer-link">Exam Results</a></li>
                        <li><a href="#contact" class="footer-link">Contact Support</a></li>
                        <li><a href="{{ route('login') }}" class="footer-link">Student Login</a></li>
                        <li><a href="{{ route('login') }}" class="footer-link">Teacher Portal</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <h6 class="text-white fw-bold mb-3">Contact Info</h6>
                    <ul class="list-unstyled small text-muted d-flex flex-column gap-2 mb-0">
                        <li><i class="bi bi-geo-alt me-2 text-primary"></i> Main Campus, KUET Road, Khulna</li>
                        <li><i class="bi bi-telephone me-2 text-primary"></i> +880 1700-000000</li>
                        <li><i class="bi bi-envelope me-2 text-primary"></i> info@rongdhonu.edu.bd</li>
                        <li><i class="bi bi-clock me-2 text-primary"></i> Sat - Thu: 8:00 AM - 8:00 PM</li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-3" style="opacity: 0.2;">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-muted">
                <p class="mb-0">&copy; {{ date('Y') }} Rongdhonu Coaching Center. All Rights Reserved.</p>
                <p class="mb-0 mt-2 mt-md-0">Designed with <i class="bi bi-heart-fill text-danger mx-1"></i> for Excellence</p>
            </div>
        </div>
    </footer>
</body>
</html>

