<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-main text-white">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-sidebar border-r border-white/10">

        <div class="p-6 border-b border-white/10">

            <h1 class="text-2xl font-bold">
                Admin Panel
            </h1>

        </div>

        <nav class="p-4 space-y-2">

            <a href="/admin/categories"
               class="sidebar-link">
                Categories
            </a>

            <a href="/admin/contents"
               class="sidebar-link">
                Contents
            </a>

            <a href="/admin/content-items"
               class="sidebar-link">
                Content Items
            </a>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>