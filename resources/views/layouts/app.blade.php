<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rongdhonu Coaching') }} - Admin Panel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            --primary: #4F46E5;
            --primary-hover: #4338CA;
            --dark-sidebar: #111827;
            --sidebar-hover: #1F2937;
            --light-bg: #F3F4F6;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: #374151;
        }
        
        /* Sidebar styling */
        .sidebar {
            min-height: 100vh;
            background-color: var(--dark-sidebar);
            color: #D1D5DB;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .sidebar-brand {
            font-size: 1.25rem;
            padding: 20px 15px;
            text-align: center;
            font-weight: 700;
            background-color: #0B0F19;
            color: #fff;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: block;
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .sidebar-brand:hover { color: #fff; }
        .sidebar a {
            color: #9CA3AF;
            text-decoration: none;
            padding: 12px 16px;
            display: block;
            border-radius: 8px;
            margin-bottom: 4px;
            font-weight: 500;
            transition: all 0.2s;
        }
        .sidebar a:hover {
            background-color: var(--sidebar-hover);
            color: #fff;
            transform: translateX(3px);
        }
        .sidebar a.active {
            background-color: var(--primary);
            color: #fff;
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3);
        }
        
        /* Main Layout */
        .main-content {
            flex-grow: 1;
            padding: 24px;
            max-width: calc(100vw - 250px);
        }
        .topbar {
            background: #fff;
            padding: 15px 24px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            margin-bottom: 24px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        /* Overrides */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        .card-header { background-color: #fff; border-bottom: 1px solid #F3F4F6; }
        .btn { font-weight: 500; border-radius: 6px; padding: 0.5rem 1rem; transition: all 0.2s; }
        .btn-primary { background-color: var(--primary); border-color: var(--primary); }
        .btn-primary:hover { background-color: var(--primary-hover); transform: translateY(-1px); box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2); }
        .table { margin-bottom: 0; }
        .table th { border-bottom-width: 1px; font-weight: 600; color: #4B5563; background-color: #F9FAFB; }
    </style>
</head>
<body>
    <div id="app" class="d-flex">
        @auth
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column" style="width: 250px;">
            <a href="{{ route('home') }}" class="sidebar-brand">
                <i class="bi bi-rainbow"></i> Rongdhonu
            </a>
            <div class="p-3">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
                <a href="{{ route('teachers.index') }}" class="{{ request()->routeIs('teachers.*') ? 'active' : '' }}">
                    <i class="bi bi-person-badge me-2"></i> Teachers
                </a>
                <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
                    <i class="bi bi-book me-2"></i> Courses
                </a>
                <a href="{{ route('enrollments.index') }}" class="{{ request()->routeIs('enrollments.*') ? 'active' : '' }}">
                    <i class="bi bi-person-lines-fill me-2"></i> Enrollments
                </a>
                <a href="{{ route('notices.index') }}" class="{{ request()->routeIs('notices.*') ? 'active' : '' }}">
                    <i class="bi bi-megaphone me-2"></i> Notices
                </a>
                <a href="{{ route('results.index') }}" class="{{ request()->routeIs('results.*') ? 'active' : '' }}">
                    <i class="bi bi-card-checklist me-2"></i> Results
                </a>
                <a href="{{ route('contacts.index') }}" class="{{ request()->routeIs('contacts.*') ? 'active' : '' }}">
                    <i class="bi bi-envelope me-2"></i> Messages
                </a>
            </div>
        </div>
        @endauth

        <!-- Main Content Wrapper -->
        <div class="main-content flex-grow-1 bg-light">
            @auth
            <!-- Topbar -->
            <div class="topbar">
                <h5 class="mb-0 text-muted">Admin Panel</h5>
                <div class="dropdown">
                    <a class="text-dark text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth

            <!-- Page Content -->
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger mb-4 shadow-sm border-0">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
