<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngkorNova | Cloud Engineering</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-navy text-slate-300 font-sans antialiased min-h-screen flex flex-col overflow-x-hidden">

    <!-- Background Grid (Fixed behind everything) -->
    <div class="fixed inset-0 z-0 bg-grid-pattern opacity-20 pointer-events-none"></div>

    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow relative z-10 pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

</body>
</html>
