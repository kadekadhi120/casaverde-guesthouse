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
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            const mainContainer = document.querySelector('main');

            if (targetElement && mainContainer) {
                // Hitung posisi elemen di dalam main container
                const topPos = targetElement.offsetTop - 80; // 80px offset untuk navbar

                mainContainer.scrollTo({
                    top: topPos,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
</html>
