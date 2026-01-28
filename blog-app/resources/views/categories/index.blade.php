<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog - Modern Programming Insights</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-full-screen">

    <!-- Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="index.html"
                    class="text-2xl font-bold text-indigo-600 tracking-tight hover:text-indigo-700 transition">
                    Dev<span class="text-gray-900">Blog</span>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-indigo-600 font-medium border-b-2 border-indigo-600 pb-1">Home</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">Start
                        Here</a>
                    <a href="#"
                        class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">Categories</a>
                    <a href="#"
                        class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">About</a>
                </nav>

                <!-- Auth / Search -->
                <div class="hidden md:flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="bg-gray-100 text-sm rounded-full pl-4 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 w-48 transition-all duration-300 focus:w-64">
                        <svg class="w-4 h-4 text-gray-400 absolute right-3 top-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <a href="admin/dashboard.html"
                        class="text-sm font-medium text-gray-500 hover:text-indigo-600 transition">Log In</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="text-gray-500 hover:text-indigo-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="grid grid-cols-1  gap-12">

            <!-- Posts Column -->
            <div class="">

                <!-- Hero Section for Blog (Optional feature post) -->
                <section class="mb-12 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">
                        Modern Tech <span class="text-indigo-600">Insights</span>
                    </h1>
                    <p class="text-xl text-gray-500 max-w-2xl mx-auto md:mx-0">
                        Explore the latest trends in web development, design patterns, and software architecture.
                    </p>
                </section>

                <!-- Filter Tags (Visual only) -->
                <div class="flex flex-wrap gap-2 mb-8">
                    <span
                        class="bg-gray-900 text-white px-4 py-2 rounded-full text-sm font-medium cursor-pointer shadow-sm">All</span>
                    <span
                        class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm font-medium border border-gray-200 hover:border-indigo-500 hover:text-indigo-600 transition cursor-pointer shadow-sm">Laravel</span>
                    <span
                        class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm font-medium border border-gray-200 hover:border-indigo-500 hover:text-indigo-600 transition cursor-pointer shadow-sm">Tailwind
                        CSS</span>
                    <span
                        class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm font-medium border border-gray-200 hover:border-indigo-500 hover:text-indigo-600 transition cursor-pointer shadow-sm">Vue.js</span>
                    <span
                        class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm font-medium border border-gray-200 hover:border-indigo-500 hover:text-indigo-600 transition cursor-pointer shadow-sm">PHP
                        8.2</span>
                </div>

                <!-- Articles Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Post Card 1 -->

                   

                        @foreach ($articles as $article)
                        <article
                            class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full group">

                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ $article['image'] }}"
                                    alt="{{ $article['title'] }}"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">

                                <span
                                    class="absolute top-4 left-4 {{ $article['category_color'] }} text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                    {{ $article['category'] }}
                                </span>
                            </div>

                            <div class="p-6 flex flex-col">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span>{{ $article['date'] }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ $article['read_time'] }}</span>
                                </div>

                                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">
                                    <a href="{{ url('/posts/' . $article['slug']) }}">
                                        {{ $article['title'] }}
                                    </a>
                                </h2>

                                <p class="text-gray-600 mb-6 line-clamp-3">
                                    {{ $article['excerpt'] }}
                                </p>

                                <div class="mt-auto flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">
                                            {{ $article['author_initials'] }}
                                        </div>
                                        <span class="ml-2 text-sm font-medium text-gray-900">
                                            {{ $article['author'] }}
                                        </span>
                                    </div>

                                    <a href="{{ url('/posts/' . $article['slug']) }}"
                                        class="text-indigo-600 font-semibold hover:text-indigo-800 text-sm flex items-center transition">
                                        Read Article →
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <article
                            class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full group">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                    alt="Code"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                <span
                                    class="absolute top-4 left-4 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Laravel</span>
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg> Jan 24, 2026</span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg> 5 min read</span>
                                </div>
                                <h2
                                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">
                                    <a href="post.html">Mastering MVC in Laravel 11</a>
                                </h2>
                                <p class="text-gray-600 mb-6 line-clamp-3">
                                    Understanding the Model-View-Controller architecture is crucial for building scalable
                                    applications. Dive deep into the core concepts...
                                </p>
                                <div class="mt-auto flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">
                                            JD</div>
                                        <span class="ml-2 text-sm font-medium text-gray-900">John Doe</span>
                                    </div>
                                    <a href="post.html"
                                        class="text-indigo-600 font-semibold hover:text-indigo-800 text-sm flex items-center transition">
                                        Read Article <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                   

                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-12">
                    <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-indigo-50 text-sm font-medium text-indigo-600 hover:bg-indigo-100">
                            1
                        </a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            2
                        </a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            3
                        </a>
                        <span
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            Next
                        </a>
                    </nav>
               

            </div>

            <!-- Sidebar -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="#" class="text-2xl font-bold text-indigo-600 tracking-tight mb-4 inline-block">
                        Dev<span class="text-gray-900">Blog</span>
                    </a>
                    <p class="text-gray-500 max-w-sm mb-6">
                        A minimalistic, clean, and modern blog template built with Laravel and Tailwind CSS purely for
                        educational purposes and aesthetic pleasure.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-600 transition"><svg class="w-6 h-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg></a>
                        <a href="#" class="text-gray-400 hover:text-indigo-600 transition"><svg class="w-6 h-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-indigo-600 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition">Contact</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-4">Resources</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-indigo-600 transition">Laravel Documentation</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition">Tailwind CSS</a></li>
                        <li><a href="#" class="hover:text-indigo-600 transition">Laracasts</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-100 mt-12 pt-8 text-center sm:text-left">
                <p class="text-sm text-gray-400">&copy; 2026 DevBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>