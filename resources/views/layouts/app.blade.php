<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rongdhonu Coaching') }} - Admin Panel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #c2c7d0;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 4px;
            margin-bottom: 5px;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #007bff;
            color: #fff;
        }
        .sidebar-brand {
            font-size: 1.25rem;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            background-color: #343a40;
            color: #fff;
            border-bottom: 1px solid #4f5962;
            display: block;
            text-decoration: none;
        }
        .sidebar-brand:hover {
            color: #fff;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .topbar {
            background: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,.08);
            margin-bottom: 20px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
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
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
