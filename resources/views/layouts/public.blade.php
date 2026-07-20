<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rongdhonu Coaching Center - Premier academic coaching and guidance since 1986. Empowering students with top-tier faculty, modern classrooms, and proven success.">
    <meta name="keywords" content="Coaching Center, Education, Exam Preparation, Khulna, Rongdhonu Coaching, Academic Guidance">
    <meta name="author" content="Rongdhonu Coaching Center">
    <meta name="theme-color" content="#2563EB">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rongdhonu Coaching Center - Since 1986">
    <meta property="og:description" content="Empowering students with premier education, dedicated mentorship, and proven success strategies since 1986.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80">

    <title>Rongdhonu Coaching Center - Since 1986</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            --primary: #2563EB;
            --primary-hover: #1D4ED8;
            --secondary: #4F46E5;
            --accent: #10B981;
            --dark: #0F172A;
            --dark-surface: #1E293B;
            --light: #F8FAFC;
            --gray: #64748B;
            --soft-blue: #EEF4FF;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Focus & Accessibility */
        a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible {
            outline: 2px solid var(--primary);
            outline-offset: 2px;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.15) !important;
            background-color: #ffffff !important;
        }

        /* Navbar */
        .navbar {
            padding: 1rem 0;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.92) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: -0.5px;
        }
        .nav-link {
            font-weight: 500;
            color: var(--gray) !important;
            margin: 0 4px;
            padding: 0.5rem 0.75rem !important;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        .nav-link:hover, .nav-link:focus {
            color: var(--primary) !important;
            background-color: rgba(37, 99, 235, 0.06);
        }
        
        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, #8B5CF6 50%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(37, 99, 235, 0.78) 100%), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover fixed;
            color: white;
            min-height: 92vh;
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
            z-index: 1;
        }
        .wave-bottom svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 60px;
        }
        .wave-bottom .shape-fill {
            fill: #FFFFFF;
        }
        
        /* Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            border-radius: 16px;
        }
        
        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-float-delayed { animation: float 5s ease-in-out infinite; animation-delay: 2s; }
        .drop-shadow { text-shadow: 0 4px 10px rgba(0,0,0,0.35); }
        
        /* Sections */
        .bg-light-gray { background-color: var(--light) !important; }
        .bg-white { background-color: #ffffff !important; }
        .bg-soft-blue { background-color: var(--soft-blue) !important; }

        .section-title {
            font-weight: 800;
            margin-bottom: 2.5rem;
            text-align: center;
            letter-spacing: -0.5px;
            position: relative;
        }
        .section-title::after {
            content: ''; display: block; width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--accent));
            margin: 14px auto 0; border-radius: 4px;
        }
        
        .section-padding { padding: 90px 0; }
        @media (max-width: 768px) {
            .section-padding { padding: 60px 0; }
        }
        
        /* Cards */
        .card {
            border-radius: 16px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #ffffff;
        }
        .transition-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.03);
        }
        
        /* Image Zoom on Hover */
        .transition-hover-image {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .group:hover .transition-hover-image {
            transform: scale(1.05);
        }
        
        /* Buttons */
        .btn { font-weight: 600; border-radius: 50rem; padding: 0.65rem 1.6rem; transition: all 0.25s ease; }
        .btn-primary { 
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); 
            border: none; 
            color: white;
        }
        .btn-primary:hover, .btn-primary:focus { 
            transform: translateY(-2px); 
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
            color: white;
        }
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.3);
        }

        /* Utility */
        .text-primary { color: var(--primary) !important; }
        .text-accent { color: var(--accent) !important; }

        /* Footer */
        .footer {
            background-color: var(--dark);
            color: #94A3B8;
            padding: 80px 0 35px;
        }
        .footer h5, .footer h6 { color: #ffffff; }
        .social-icon {
            display: inline-flex; align-items: center; justify-content: center;
            width: 42px; height: 42px; border-radius: 50%;
            background: rgba(255,255,255,0.08); color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .social-icon:hover, .social-icon:focus { background: var(--primary); transform: translateY(-3px); color: white; }
        
        .footer-link {
            color: #94A3B8;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .footer-link:hover {
            color: #38BDF8;
            transform: translateX(4px);
        }

        /* Back to Top Button */
        #backToTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            border: none;
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.4);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #backToTopBtn.show {
            opacity: 1;
            visibility: visible;
        }
        #backToTopBtn:hover {
            background: var(--primary-hover);
            transform: translateY(-4px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-3" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4 d-flex align-items-center gap-2" href="{{ url('/') }}">
                <i class="bi bi-rainbow text-accent fs-3"></i>
                <span class="fw-extrabold text-dark">Rongdhonu <span class="text-primary">Coaching</span></span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#publicNavbar" aria-controls="publicNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNavbar">
                <ul class="navbar-nav ms-auto align-items-center gap-1">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#teachers">Faculty</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#notices">Updates</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#results">Results</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#contact">Contact</a></li>
                    @auth
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0"><a class="btn btn-outline-primary px-4 rounded-pill fw-semibold" href="{{ route('home') }}"><i class="bi bi-speedometer2 me-1"></i> Admin Panel</a></li>
                    @else
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0"><a class="btn btn-primary px-4 rounded-pill fw-semibold shadow-sm text-white" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right me-1"></i> Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main id="main-content">
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" aria-label="Back to top" title="Back to top">
        <i class="bi bi-arrow-up fs-5"></i>
    </button>

    <footer class="footer">
        <div class="container">
            <div class="row g-4 pb-4">
                <div class="col-lg-4 col-md-6 mb-3">
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-rainbow text-primary fs-4"></i> Rongdhonu Coaching
                    </h5>
                    <p class="small text-white-50 mb-4 lh-lg">Empowering students with premier education, dedicated mentorship, and proven success strategies since 1986.</p>
                    <div class="d-flex gap-2">
                        <a href="https://facebook.com/rongdhonucoaching" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Facebook Page" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/rongdhonucoaching" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Twitter Profile" title="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://instagram.com/rongdhonucoaching" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram Profile" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/company/rongdhonu-coaching-center" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="LinkedIn Page" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
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
                        <li><a href="{{ route('login') }}" class="footer-link">Student Portal</a></li>
                        <li><a href="{{ route('login') }}" class="footer-link">Teacher Portal</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <h6 class="text-white fw-bold mb-3">Contact Info</h6>
                    <ul class="list-unstyled small text-white-50 d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-2"><i class="bi bi-geo-alt-fill text-primary fs-6 mt-1"></i> <span>Main Campus, KUET Road, Fulbarigate, Khulna</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-telephone-fill text-primary fs-6"></i> <a href="tel:+8801700000000" class="text-white-50 text-decoration-none">+880 1700-000000</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-envelope-fill text-primary fs-6"></i> <a href="mailto:info@rongdhonu.edu.bd" class="text-white-50 text-decoration-none">info@rongdhonu.edu.bd</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-clock-fill text-primary fs-6"></i> <span>Sat - Thu: 8:00 AM - 8:00 PM</span></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4" style="opacity: 0.15;">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-white-50 gap-2">
                <p class="mb-0">&copy; {{ date('Y') }} Rongdhonu Coaching Center. All Rights Reserved.</p>
                <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger mx-1"></i> for Educational Excellence</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const backToTopBtn = document.getElementById('backToTopBtn');
            if (backToTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        backToTopBtn.classList.add('show');
                    } else {
                        backToTopBtn.classList.remove('show');
                    }
                });
                backToTopBtn.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>


