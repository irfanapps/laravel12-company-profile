<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - {{ config('app.name') }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Laravel Notify CSS -->
    @notifyCss

    <!-- Custom CSS -->
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar-collapsed {
            width: 80px;
        }

        .sidebar-collapsed .nav-text {
            display: none;
        }

        .content {
            transition: margin-left 0.3s ease;
        }

        .active-nav {
            background-color: #3b82f6;
            color: white !important;
        }

        .active-nav:hover {
            background-color: #2563eb !important;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar bg-gray-800 text-white w-64 flex flex-col">
            <!-- Logo/Brand -->
            <div class="p-4 border-b border-gray-700 flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-building mr-3 text-blue-400 text-xl"></i>
                    <span class="font-bold text-xl">CompanyAdmin</span>
                </div>
                <button id="toggleSidebar" class="text-gray-400 hover:text-white">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- User Profile -->
            <div class="p-4 border-b border-gray-700 flex items-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=3b82f6&color=fff"
                    alt="User" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <div class="font-medium">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-gray-400">{{ auth()->user()->email }}</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 overflow-y-auto">
                <ul class="py-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-concierge-bell mr-3"></i>
                            <span class="nav-text">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.projects.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-project-diagram mr-3"></i>
                            <span class="nav-text">Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.teams.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-users mr-3"></i>
                            <span class="nav-text">Teams</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-blog mr-3"></i>
                            <span class="nav-text">Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blogs.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-blog mr-3"></i>
                            <span class="nav-text">Blogs</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                            <i class="fas fa-user-cog mr-3"></i>
                            <span class="nav-text">User Management</span>
                        </a>
                    </li> --}}
                </ul>
            </nav>

            <!-- Bottom Section -->
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center text-gray-300 hover:text-white w-full">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        <span class="nav-text">Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>

                    <div class="flex items-center space-x-4">
                        <!-- Notification Bell -->
                        <div class="relative">
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                            </button>
                        </div>

                        <!-- Search Bar -->
                        <div class="relative">
                            <input type="text" placeholder="Search..."
                                class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                <!-- Notifications -->
                {{-- @include('notify::messages') --}}

                <!-- Breadcrumbs -->
                <nav class="flex mb-6" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('admin.dashboard') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <i class="fas fa-home mr-2"></i>
                                Home
                            </a>
                        </li>
                        @yield('breadcrumbs')
                    </ol>
                </nav>

                <!-- Main Content Section -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t px-6 py-4">
                <div class="flex items-center justify-between">
                    <p class="text-gray-600 text-sm">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Laravel Notify JS -->
    @notifyJs

    <!-- Custom JavaScript -->
    <script>
        // Toggle sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('sidebar-collapsed');
            document.querySelector('.content').classList.toggle('ml-64');
            document.querySelector('.content').classList.toggle('ml-20');
        });

        // Set active nav item
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;
            const navLinks = document.querySelectorAll('nav a');

            navLinks.forEach(link => {
                if (link.href === currentUrl) {
                    link.classList.add('active-nav');
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
