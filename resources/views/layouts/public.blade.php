<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rongdhonu Coaching Center - Since 1986</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            --primary: #2563EB;
            --primary-hover: #1D4ED8;
            --secondary: #4F46E5;
            --accent: #10B981;
            --dark: #111827;
            --light: #F8FAFC;
            --gray: #6B7280;
            --soft-blue: #EEF4FF;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }
        
        /* Navbar */
        .navbar { padding: 15px 0; transition: all 0.3s ease; border-bottom: 1px solid rgba(0,0,0,0.05); background: white; }
        .navbar-brand { font-size: 1.5rem; letter-spacing: -0.5px; }
        .nav-link { font-weight: 500; color: var(--gray) !important; margin: 0 5px; transition: color 0.2s; }
        .nav-link:hover { color: var(--primary) !important; }
        
        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.9) 0%, rgba(37, 99, 235, 0.7) 100%), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover fixed;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background-blend-mode: multiply;
        }

        /* Wave Divider */
        .wave-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        .wave-bottom svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 70px;
        }
        .wave-bottom .shape-fill {
            fill: #FFFFFF;
        }
        
        /* Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: white;
            border-radius: 16px;
        }
        
        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-float-delayed { animation: float 5s ease-in-out infinite; animation-delay: 1.5s; }
        .drop-shadow { text-shadow: 0 4px 6px rgba(0,0,0,0.3); }
        
        /* Sections */
        .bg-light-gray { background-color: var(--light) !important; }
        .bg-white { background-color: white !important; }
        .bg-soft-blue { background-color: var(--soft-blue) !important; }

        .section-title {
            font-weight: 800;
            margin-bottom: 50px;
            text-align: center;
            letter-spacing: -1px;
            position: relative;
        }
        .section-title::after {
            content: ''; display: block; width: 60px; height: 4px; background: var(--accent);
            margin: 15px auto 0; border-radius: 2px;
        }
        .section-padding { padding: 100px 0; }
        
        /* Cards */
        .card {
            border-radius: 16px;
            border: 1px solid rgba(0,0,0,0.04);
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05), 0 4px 6px -2px rgba(0,0,0,0.025);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: white;
        }
        .transition-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 30px -5px rgba(0,0,0,0.1), 0 15px 15px -5px rgba(0,0,0,0.04);
        }
        
        /* Image Zoom on Hover */
        .transition-hover-image {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .group:hover .transition-hover-image {
            transform: scale(1.05);
        }
        
        /* Buttons */
        .btn { font-weight: 600; border-radius: 50rem; padding: 0.6rem 1.5rem; transition: all 0.3s; }
        .btn-primary { 
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); 
            border: none; 
            color: white;
        }
        .btn-primary:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
            color: white;
        }
        
        /* Utility */
        .text-primary { color: var(--primary) !important; }
        .text-accent { color: var(--accent) !important; }
        
        /* Footer */
        .footer {
            background-color: var(--dark);
            color: #9CA3AF;
            padding: 80px 0 40px;
        }
        .footer h5, .footer h4 { color: white; }
        .social-icon {
            display: inline-flex; align-items: center; justify-content: center;
            width: 40px; height: 40px; border-radius: 50%;
            background: rgba(255,255,255,0.1); color: white;
            transition: all 0.3s;
            text-decoration: none;
        }
        .social-icon:hover { background: var(--primary); transform: translateY(-3px); color: white; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                <i class="bi bi-rainbow text-accent"></i> Rongdhonu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#publicNavbar" aria-controls="publicNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNavbar">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teachers">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#notices">Updates</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    @auth
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0"><a class="btn btn-outline-primary btn-sm px-4" href="{{ route('home') }}">Admin Panel</a></li>
                    @else
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0"><a class="btn btn-primary btn-sm px-4 text-white" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <h4 class="fw-bold mb-3"><i class="bi bi-rainbow text-accent"></i> Rongdhonu</h4>
                    <p class="text-muted">Empowering students and shaping bright futures since 1986. A legacy of excellence in education.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#courses" class="text-decoration-none text-muted">Our Courses</a></li>
                        <li class="mb-2"><a href="#teachers" class="text-decoration-none text-muted">Expert Faculty</a></li>
                        <li class="mb-2"><a href="#notices" class="text-decoration-none text-muted">Latest Notices</a></li>
                        <li class="mb-2"><a href="#results" class="text-decoration-none text-muted">Success Stories</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Connect With Us</h5>
                    <div class="d-flex gap-2">
                        <a href="#" class="social-icon"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube fs-5"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary opacity-25">
            <div class="text-center pt-3">
                <p class="mb-0 text-muted small">&copy; {{ date('Y') }} Rongdhonu Coaching Center. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
