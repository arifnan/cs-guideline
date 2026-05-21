<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        CS Guideline
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <!-- ALPINE -->
    <script defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
    </script>

    <script defer
            src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js">
    </script>

    <!-- FONT -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
          rel="stylesheet">

</head>

<body class="bg-main text-white font-inter">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-sidebar border-r border-white/10 hidden lg:block">

        <div class="p-6 border-b border-white/10">

            <h1 class="text-2xl font-bold">
                CS Guideline
            </h1>

            <p class="text-sm text-white/60 mt-1">
                Knowledge Base Portal
            </p>

        </div>

        <nav class="p-4 space-y-2">

            @isset($categories)

                @foreach($categories as $category)

                    <a href="#category-{{ $category->id }}"
                       class="sidebar-link block">

                        {{ $category->name }}

                    </a>

                @endforeach

            @endisset

        </nav>

    </aside>

    <!-- MAIN -->
    <main class="flex-1">

        <!-- HEADER -->
        <header class="border-b border-white/10 bg-header sticky top-0 z-50 backdrop-blur">

            <div class="px-8 py-4 flex justify-between items-center">

                <div>

                    <h2 class="text-xl font-semibold">
                        Customer Service Guideline
                    </h2>

                    <p class="text-sm text-white/60">
                        Sistem informasi pelayanan
                    </p>

                </div>

                <div class="w-80">

                    <input
                        type="text"
                        placeholder="Cari guideline..."
                        class="search-input"
                    >

                </div>

            </div>

        </header>

        <!-- CONTENT -->
        <section class="p-8">

            @yield('content')

        </section>

    </main>

</div>

</body>
</html>