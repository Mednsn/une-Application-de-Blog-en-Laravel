<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering MVC in Laravel 11 - DevBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.html"
                    class="text-2xl font-bold text-indigo-600 tracking-tight hover:text-indigo-700 transition">
                    Dev<span class="text-gray-900">Blog</span>
                </a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/"
                        class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">Home</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">Start
                        Here</a>
                    <a href="#"
                        class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">Categories</a>
                    <a href="#"
                        class="text-gray-500 hover:text-indigo-600 font-medium transition duration-150">About</a>
                </nav>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#"
                        class="text-sm font-medium text-gray-500 hover:text-indigo-600 transition">Log In</a>
                </div>
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
        <div class="max-w-4xl mx-auto">

            <!-- Breadcrumb -->
            <nav class="flex text-gray-500 text-sm mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="index.html" class="hover:text-indigo-600 transition">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="hover:text-indigo-600 transition">Laravel</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-900 font-medium">Mastering MVC...</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Article -->
            <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

                <!-- Post Header -->
                <header class="p-6 md:p-10 pb-0">
                    <div class="flex items-center space-x-2 mb-4">
                        <span
                            class="bg-indigo-100 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">{{ $post->category->name }}</span>
                        <span class="text-gray-400 text-sm">•</span>
                        <span class="text-gray-500 text-sm">{{ $post->created_at }}</span>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
                        {{ $post['title']}}
                    </h1>
                    <div class="flex items-center justify-between border-b border-gray-100 pb-8">
                        <div class="flex items-center">
                            <div
                                class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-sm font-bold text-gray-600">
                                JD</div>
                            <div class="ml-3">
                                <p class="text-sm font-bold text-gray-900">{{ $post['author'] }}</p>
                                <p class="text-xs text-gray-500">Senior Graphic Designer</p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-gray-400 hover:text-indigo-600 transition p-2 bg-gray-50 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </button>
                            <button class="text-gray-400 hover:text-indigo-600 transition p-2 bg-gray-50 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="h-96 w-full mt-8 relative">
                    <img src="{{ $post['image'] }}"
                        alt="" class="w-full h-full object-cover">
                </div>

                <!-- Post Body -->
                <div class="p-6 md:p-10 prose prose-indigo max-w-none text-gray-700 leading-relaxed">
                    <p class="text-lg">
                        {{ $post['description'] }}
                        MVC - Model View Controller. It's the bread and butter of modern web development, and Laravel
                        implements it beautifully. In this guide, we'll explore how to structure your Laravel
                        applications to take full advantage of this pattern.
                    </p>
                    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding the Model</h2>
                    <p>
                        The Model represents your data structure. In Laravel, this is typically handled by Eloquent ORM.
                        Models allow you to query the database and define relationships between different data tables.
                    </p>
                    <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg my-6 overflow-x-auto"><code>class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body', 'user_id'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}</code></pre>
                    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">The Controller's Role</h2>
                    <p>
                        Controllers are the traffic cops of your application. They take user input, process it (often
                        using Models), and then determine what response to send back (usually a View).
                    </p>
                    <p>
                        Keep your controllers skinny! Business logic should ideally reside in Services or Actions, not
                        in the controller methods themselves.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Views with Blade</h2>
                    <p>
                        Blade is Laravel's powerful templating engine. It allows you to write expressive syntax for your
                        HTML output without the overhead of a full JavaScript framework if you don't need one.
                    </p>
                    <blockquote class="border-l-4 border-indigo-500 pl-4 italic text-gray-600 my-6">
                        "MVC is not just a pattern; it's a way of thinking about separation of concerns."
                    </blockquote>
                    <p>
                        By adhering to these principles, your code becomes more maintainable, testable, and scalable.
                    </p>
                </div>

                <!-- Tags & Share -->
                <div class="px-6 md:px-10 py-6 border-t border-gray-100">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-gray-500 text-sm font-medium mr-2">Tags:</span>
                        <a href="#"
                            class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm hover:bg-indigo-100 hover:text-indigo-600 transition">#laravel</a>
                        <a href="#"
                            class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm hover:bg-indigo-100 hover:text-indigo-600 transition">#mvc</a>
                        <a href="#"
                            class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm hover:bg-indigo-100 hover:text-indigo-600 transition">#backend</a>
                    </div>
                </div>

            </article>

            <!-- Navigation Links -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
                <a href="#"
                    class="flex items-center p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                    <svg class="w-6 h-6 text-gray-400 group-hover:text-indigo-600 mr-4 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <div>
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wide">Previous Post</span>
                        <span
                            class="block text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition">Getting Started with PHP 8.2</span>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center justify-end p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group text-right">
                    <div>
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wide">Next Post</span>
                        <span class="block text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition">Blade
                            Component Tricks</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 group-hover:text-indigo-600 ml-4 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Related Posts -->
            <section class="mt-16">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">You might also like</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Related Card 1 -->
                    <a href="#" class="group block">
                        <div class="h-48 rounded-xl overflow-hidden mb-4">
                            <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                alt="Related"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition">Tailwind CSS
                            Tricks</h4>
                        <p class="text-sm text-gray-500 mt-1">Jan 22, 2026</p>
                    </a>
                    <!-- Related Card 2 -->
                    <a href="#" class="group block">
                        <div class="h-48 rounded-xl overflow-hidden mb-4">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                alt="Related"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition">Clean Code
                            Principles</h4>
                        <p class="text-sm text-gray-500 mt-1">Jan 15, 2026</p>
                    </a>
                    <!-- Related Card 3 -->
                    <a href="#" class="group block">
                        <div class="h-48 rounded-xl overflow-hidden mb-4">
                            <img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                alt="Related"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition">Database
                            Optimization</h4>
                        <p class="text-sm text-gray-500 mt-1">Jan 10, 2026</p>
                    </a>
                </div>
            </section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12 py-8">
        <div class="container mx-auto px-4 text-center text-gray-500 text-sm">
            &copy; 2026 DevBlog. Just a template.
        </div>
    </footer>

</body>

</html>