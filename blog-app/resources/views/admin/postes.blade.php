<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

    <div class="min-h-screen flex flex-col md:flex-row">

        <!-- Sidebar -->
        <aside class="w-full md:w-64 bg-gray-900 text-white flex-shrink-0 md:h-screen md:sticky md:top-0">
            <div class="p-6">
                <a href="../index.html" class="text-2xl font-bold tracking-tight flex items-center gap-2">
                    <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                        </path>
                    </svg>
                    DevBlog
                </a>
            </div>

            <nav class="mt-6 px-4 space-y-2">
                <a href="/admin"
                    class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition-colors group">
                    <svg class="w-5 h-5 mr-3 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 bg-indigo-600 text-white rounded-lg transition-colors group">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                        </path>
                    </svg>
                    Posts
                </a>
                <a href="{{ route('categories.index')}}"
                    class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition-colors group">
                    <svg class="w-5 h-5 mr-3 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                    Categories
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-400 hover:bg-gray-800 hover:text-white rounded-lg transition-colors group">
                    <svg class="w-5 h-5 mr-3 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                    </svg>
                    Tags
                </a>
            </nav>

            <div class="mt-auto p-6 border-t border-gray-800">
                <a href="../index.html"
                    class="flex items-center px-4 py-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header
                class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 lg:px-12 bg-white">
                <h2 class="text-xl font-bold text-gray-800">Manage Posts</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500">Welcome, Admin</span>
                    <div
                        class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold border border-indigo-200">
                        AD
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 lg:p-12 overflow-y-auto">

                <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
                    <div class="relative w-full md:w-64">
                        <input type="text" placeholder="Search posts..."
                            class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-sm">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button onclick="openModal()"
                        class="w-full md:w-auto bg-indigo-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-indigo-700 transition shadow-sm flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        Create Post
                    </button>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-600">
                            <thead class="bg-gray-50 text-xs uppercase font-medium text-gray-500">
                                <tr>
                                    <th class="px-6 py-3">Image</th>
                                    <th class="px-6 py-3">Title</th>
                                    <th class="px-6 py-3">Category</th>
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($posts as $post)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="mb-3  rounded-8 w-8 h-8 bg-blue-800 bg-cover bg-[url({{ $post->image }})]"></td>
                                    <td class="mb-3 px-6 py-4 font-medium text-gray-900">{{ $post->title }}</td>
                                    <td class="mb-3 px-6 py-4"><span
                                            class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full text-xs">{{ $post->category->name }}</span>
                                    </td>

                                    <td class="mb-3 px-6 py-4">{{ $post->created_at }}12/02/2026</td>
                                    <td class="mb-3 px-6 py-4 text-right space-x-2">
                                        <a href="{{ route('posts.edit', $post) }}"
                                            class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-between items-center mt-6">
                    <p class="text-sm text-gray-500">Showing 1 to 4 of 42 results</p>
                    <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Previous</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Next</a>
                    </nav>
                </div>

            </main>
        </div>
        <!-- Create Post Modal -->
        <div id="createPostModal"
            class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
            <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-xl bg-white">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Create New Post</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('posts.store')}}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter post title"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Post author</label>
                        <input type="text" id="author" name="author" placeholder="Enter post author"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
                        <label for="read-time" class="block text-sm font-medium text-gray-700 mb-1">Post read time (8 min )</label>
                        <input type="text" id="read-time" name="read_time" placeholder="Enter post read-time"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Select Category</label>
                            <select name="category_id"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none bg-white">
                                @foreach ($categories as $category)
                                <option value=" {{ $category['id'] }}"> {{ $category['name'] }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">image </label>
                            <input type="text" id="image" name="image" placeholder="e.g. php, backend"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                        <textarea id="content" name="content" rows="6" placeholder="Write your post content..."
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"></textarea>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-4 border-t border-gray-100">
                        <button type="button" onclick="closeModal()"
                            class="px-6 py-2 rounded-lg text-gray-700 font-medium hover:bg-gray-100 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-6 py-2 rounded-lg bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition shadow-sm">
                            Publish Post
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function openModal() {
                document.getElementById('createPostModal').classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                document.getElementById('createPostModal').classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            // Close modal when clicking outside
            document.getElementById('createPostModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });
        </script>
    </div>

</body>

</html>