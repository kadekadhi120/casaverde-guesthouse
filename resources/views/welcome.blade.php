<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Verde Guest House</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-[#1a3c26] text-white overflow-hidden">

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Scroll Container -->
    <main
        class="pt-16 h-screen w-full overflow-y-scroll
               snap-y snap-mandatory scroll-smooth no-scrollbar">

        @include('sections.home')
        @include('sections.about')
        @include('sections.facilities')
        @include('sections.contact')

    </main>

</body>
</html>
